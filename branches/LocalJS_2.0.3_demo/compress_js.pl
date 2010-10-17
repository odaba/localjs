#!/usr/bin/perl -w -s
#
# compress css and js files with YUI compressor

use strict;
use warnings;

use File::Basename;
use File::Path;
use File::Spec;

sub processDir($$$)
{
	my $compressor = shift;
	my $compressDir = shift;
	my $destDir = shift;
	
	my $tmpFile = File::Spec->catfile($compressDir, 'tmp');

	opendir(DIRCOMPRESS, $compressDir) || die "can't opendir $compressDir: $!";
	foreach my $_compressedFile (grep {/\.(css|js)$/ && -f File::Spec->catfile($compressDir, $_)} readdir(DIRCOMPRESS))
	{
		my $compressedFile = File::Spec->catfile($compressDir, $_compressedFile);
		my $destFile = File::Spec->catfile($destDir, $_compressedFile);
		
		print "Compressing ${compressedFile} to ${destFile} ...\n";
		system("java -jar ${compressor} --charset utf-8 -o $tmpFile ${compressedFile}");
		
		rename $tmpFile, $destFile;
	}
	closedir DIRCOMPRESS;
}

sub main()
{
	if (1 != @ARGV && 2 != @ARGV)
	{
		print "Usage:\t$0 html_root_folder\n\t$0 source_folder dest_folder\n";
		exit;
	};

	my $base_dir = dirname(File::Spec->rel2abs($0));
	my $compressor = File::Spec->catfile($base_dir, "yuicompressor-2.4.2.jar");

	if (1 == @ARGV)
	{
		my $html_dir = shift @ARGV;
	
		foreach my $_compressDir ('_js', '_css')
		{
			my $compressDir = File::Spec->catfile($html_dir, $_compressDir);
			processDir($compressor, $compressDir, $compressDir) if -d $compressDir;
		}
	}
	else
	{
		my $source_dir = shift @ARGV;
		my $dest_dir = shift @ARGV;
		processDir($compressor, $source_dir, $dest_dir);
	}
}

main();
