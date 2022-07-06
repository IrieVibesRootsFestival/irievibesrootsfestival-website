# tip: on windows explorer shift + right-click a directory and copy its path
$dir = "D:\Documents\GitHub\irievibesrootsfestival-website\src\img\partners"

# get all files in the directory
$images = Get-ChildItem $dir

foreach ($img in $images) {
  # output file will be written in the same directory 
  # but with .webp extension instead of old extension
  $outputName = $img.DirectoryName + "\" + $img.BaseName + ".webp"

  D:\Downloads\libwebp-1.2.2-windows-x64\libwebp-1.2.2-windows-x64\bin\cwebp.exe $img.FullName -o $outputName -f 40 -q 40 -m 6 -mt
}