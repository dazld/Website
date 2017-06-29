<div class="magick-header">
<p class="text-center"><?php options("adaptive-blur", "adaptive-resize", "adaptive-sharpen", "adjoin", "affine", "alpha", "annotate", "antialias", "append", "attenuate", "authenticate", "auto-gamma", "auto-level", "auto-orient", "backdrop", "background", "bench", "bias", "black-point-compensation", "black-threshold", "blend", "blue-primary", "blue-shift", "blur", "border", "bordercolor", "borderwidth", "brightness-contrast", "cache", "canny", "caption", "cdl", "channel", "charcoal", "channel-fx", "chop", "clamp", "clip", "clip-mask", "clip-path", "clone", "clut", "coalesce", "colorize", "colormap", "color-matrix", "colors", "colorspace", "combine", "comment", "compare", "complex", "compose", "composite", "compress", "connected-components", "contrast", "contrast-stretch", "convolve", "copy", "crop", "cycle", "debug", "decipher", "deconstruct", "define", "delay", "delete", "density", "depth", "descend", "deskew", "despeckle", "direction", "displace", "display", "dispose", "dissimilarity-threshold", "dissolve", "distort", "distribute-cache", "dither", "draw", "duplicate", "edge", "emboss", "encipher", "encoding", "endian", "enhance", "equalize", "evaluate", "evaluate-sequence", "extent", "extract", "family", "features", "fft", "fill", "filter", "flatten", "flip", "floodfill", "flop", "font", "foreground", "format", "format[identify]", "frame", "frame[import]", "function", "fuzz", "fx", "gamma", "gaussian-blur", "geometry", "gravity", "grayscale", "green-primary", "hald-clut", "help", "highlight-color", "hough-lines", "iconGeometry", "iconic", "identify", "ift", "immutable", "implode", "insert", "intensity", "intent", "interlace", "interpolate", "interline-spacing", "interword-spacing", "kerning", "kuwahara", "label", "lat", "layers", "level", "level-colors", "limit", "linear-stretch", "linewidth", "liquid-rescale", "list", "log", "loop", "lowlight-color", "magnify", "map", "map[stream]", "mattecolor", "median", "mean-shift", "metric", "mode", "modulate", "moments", "monitor", "monochrome", "morph", "morphology", "mosaic", "motion-blur", "name", "negate", "noise", "normalize", "opaque", "ordered-dither", "orient", "page", "paint", "path", "pause[animate]", "pause[import]", "perceptible", "ping", "pointsize", "polaroid", "poly", "posterize", "precision", "preview", "print", "process", "profile", "quality", "quantize", "quiet", "radial-blur", "raise", "random-threshold", "read-mask", "red-primary", "regard-warnings", "region", "remap", "remote", "render", "repage", "resample", "resize", "respect-parentheses", "reverse", "roll", "rotate", "sample", "sampling-factor", "scale", "scene", "screen", "seed", "segment", "selective-blur", "separate", "sepia-tone", "set", "shade", "shadow", "shared-memory", "sharpen", "shave", "shear", "sigmoidal-contrast", "silent", "similarity-threshold", "size", "sketch", "smush", "snaps", "solarize", "sparse-color", "splice", "spread", "statistic", "stegano", "stereo", "storage-type", "stretch", "strip", "stroke", "strokewidth", "style", "subimage-search", "swap", "swirl", "synchronize", "taint", "text-font", "texture", "threshold", "thumbnail", "tile", "tile-offset", "tint", "title", "transform", "transparent", "transparent-color", "transpose", "transverse", "treedepth", "trim", "type", "undercolor", "unique-colors", "units", "unsharp", "update", "verbose", "version", "view", "vignette", "virtual-pixel", "visual", "watermark", "wave", "wavelet-denoise", "weight", "white-point", "white-threshold", "window", "window-group", "write", "write-mask"); ?> </p> 
<p class="lead magick-description">Below is list of command-line options recognized by the ImageMagick <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">command-line tools</a>. If you want a description of a particular option, click on the option name in the navigation bar above and you will go right to it. Unless otherwise noted, each option is recognized by the commands: <?php cmd("convert"); ?> and <?php cmd("mogrify"); ?>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="adaptive-blur"></a>-adaptive-blur <var>radius</var>[x<var>sigma</var>]</h3>
</div>

<p class="magick-description">Adaptively blur pixels, with decreasing effect near edges.</p>

<p>A Gaussian operator of the given radius and standard deviation (<var>sigma</var>) is used. If <var>sigma</var> is not given it
defaults to 1.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="adaptive-resize"></a>-adaptive-resize <var>geometry</var></h3>
</div>

<p class="magick-description">Resize the image using data-dependent triangulation.</p>

<p><?php seeGeometry(); ?> The <a href="#adaptive-resize">-adaptive-resize</a>
option defaults to data-dependent triangulation.  Use the <a
href="#filter">-filter</a> to choose a different resampling algorithm.
Offsets, if present in the geometry string, are ignored, and the <a
href="#gravity">-gravity</a> option has no effect.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="adaptive-sharpen"></a>-adaptive-sharpen <var>radius</var>[x<var>sigma</var>]</h3>
</div>

<p class="magick-description">Adaptively sharpen pixels, with increasing effect near edges.</p>

<p>A Gaussian operator of the given radius and standard deviation
(<var>sigma</var>) is used. If <var>sigma</var> is not given it
defaults to 1.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="adjoin"></a>-adjoin</h3>
</div>

<p class="magick-description">Join images into a single multi-image file.</p>

<p>This option is enabled by default. An attempt is made to save all images of
an image sequence into the given output file.  However, some formats, such as
JPEG and PNG, do not support more than one image per file, and in that case
ImageMagick is forced to write each image as a separate file.  As such, if
more than one image needs to be written, the filename given is modified by
adding a <a href="#scene">-scene</a> number before the suffix, in order to
make distinct names for each image. </p>

<p>Use <a href="#adjoin">+adjoin</a> to force each image to be written to
separate files, whether or not the file format allows multiple images per file
(for example, GIF, MIFF, and TIFF). </p>

<p>Including a C-style integer format string in the output filename will
automagically enable <a href="#adjoin">+adjoin</a> and are used to specify
where the <a href="#scene">-scene</a> number is placed in the filenames. These
strings, such as '<code>%d</code>' or '<code>%03d</code>', are familiar to those
who have used the standard <code>printf()</code>' C-library function. As an
example, the command</p>

<pre><code>
convert logo: rose: -morph 15 my%02dmorph.jpg
</code></pre>

<p>will create a sequence of 17 images (the two given plus 15 more created by
<a href="#morph">-morph</a>), named: my00morph.jpg, my01morph.jpg,
my02morph.jpg, ..., my16morph.jpg.  </p>

<p>In summary, ImageMagick tries to write all images to one file, but will
save to multiple files, if any of the following conditions exist...</p>
<ol>
<li>the output image's file format does not allow multi-image files,</li>
<li>the <a href="#adjoin">+adjoin</a> option is given, or</li>
<li>a printf() integer format string (eg: "%d") is present in the output
 filename.</li>
</ol>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="affine"></a>-affine
  <var>s<sub>x</sub></var>,<var>r<sub>x</sub></var>,<var>r<sub>y</sub></var>,<var>s<sub>y</sub></var>[,<var>t<sub>x</sub></var>,<var>t<sub>y</sub></var>]</h3>
</div>

<p class="magick-description">Set the drawing transformation matrix for combined rotating and scaling.</p>

<p>This option sets a transformation matrix, for use by subsequent <a
href="#draw">-draw</a> or <a href="#transform">-transform</a> options. </p>

<p>The matrix entries are entered as comma-separated numeric values either in
quotes or without spaces. </p>

<p>Internally, the transformation matrix has 3x3 elements, but three of them
are omitted from the input because they are constant. The new (transformed)
coordinates (<var>x'</var>, <var>y'</var>) of a pixel at
position (<var>x</var>, <var>y</var>) in the original
image are calculated using the following matrix equation.</p>

<p class="text-center"><img class="img-thumbnail" alt="affine transformation"  src="<?php echo $_SESSION['RelativePath']?>/../image/affine.png"/> </p>

<p> The size of the resulting image is that of the smallest rectangle that
contains the transformed source image.  The parameters 
<var>t<sub>x</sub></var> and <var>t<sub>y</sub></var>
subsequently shift the image pixels so that those that are moved out of the
image area are cut off.</p>

<p>The transformation matrix complies with the left-handed pixel coordinate
system: positive <var>x</var> and <var>y</var> directions
are rightward and downward, resp.; positive rotation is clockwise.</p>

<p> If the translation coefficients <var>t<sub>x</sub></var> and 
<var>t<sub>y</sub></var> are omitted they default to 0,0. Therefore,
four parameters suffice for rotation and scaling without translation.</p>

<p>Scaling by the factors <var>s<sub>x</sub></var> and 
<var>s<sub>y</sub></var> in the <var>x</var> and <var>y</var> directions,
respectively, is accomplished with the following.</p>

<p>See <a href="#transform">-transform</a>, and the <a
href="#distort">-distort</a> method '<code>Affineprojection</code> for more
information </p>


<pre><code>
-affine <var>s<sub>x</sub></var>,0,0,<var>s<sub>y</sub></var>
</code></pre>

<p>Translation by a displacement (<var>t<sub>x</sub></var>, <var>t<sub>y</sub></var>) is accomplished like so:</p>

<pre><code>
-affine 1,0,0,1,<var>t<sub>x</sub></var>,<var>t<sub>y</sub></var>
</code></pre>

<p>Rotate clockwise about the origin (the upper left-hand corner) by an angle
<var>a</var> by letting <var>c</var> = cos(<var>a</var>), <var>s</var>
= sin(<var>a</var>), and using the following.</p>

<pre><code>
-affine <var>c</var>,<var>s</var>,-<var>s</var>,<var>c</var>
</code></pre>

<p>The cumulative effect of a sequence of <a href="#affine" >-affine</a>
transformations can be accomplished by instead by a single <a href="#affine"
>-affine</a> operation using the matrix equal to the product of the matrices
of the individual transformations.</p>

<p>An attempt is made to detect near-singular transformation matrices. If the
matrix determinant has a sufficiently small absolute value it is rejected.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="alpha"></a>-alpha <var>type</var></h3>
</div>

<p class="magick-description">Gives control of the alpha/matte channel of an image.</p>

<p>Used to set a flag on an image indicating whether or not to use existing alpha
channel data, to create an alpha channel, or to perform other operations on the alpha channel.  Choose the argument <var>type</var> from the list below.</p>

<dl class="row">
    <dt class="col-md-4">Activate</dt>
    <dd class="col-md-8">
       Enable the image's transparency channel. Note normally Set
       should be used instead of this, unless you specifically need to
       preserve existing (but specifically turned Off) transparency
       channel. </dd>

    <dt class="col-md-4">Associate</dt>
    <dd class="col-md-8">
       associate the alpha channel with the image.</dd>

    <dt class="col-md-4">Deactivate</dt>
    <dd class="col-md-8">
       Disables the image's transparency channel. Does not delete or change the
       existing data, just turns off the use of that data.</dd>

    <dt class="col-md-4">Disassociate</dt>
    <dd class="col-md-8">
       disassociate the alpha channel from the image.</dd>

    <dt class="col-md-4">Set</dt>
    <dd class="col-md-8">
       Activates the alpha/matte channel. If it was previously turned off
       then it also resets the channel to opaque.  If the image already had
       the alpha channel turned on, it will have no effect.</dd>

    <dt class="col-md-4">Opaque</dt>
    <dd class="col-md-8">
       Enables the alpha/matte channel and forces it to be fully opaque.
       </dd>

    <dt class="col-md-4">Transparent</dt>
    <dd class="col-md-8">
       Activates the alpha/matte channel and forces it to be fully
       transparent. This effectively creates a fully transparent image the
       same size as the original and with all its original RGB data still
       intact, but fully transparent. </dd>

    <dt class="col-md-4">Extract</dt>
    <dd class="col-md-8">
       Copies the alpha channel values into all the color channels and turns
       'Off' the the image's transparency, so as to generate
       a grayscale mask of the image's shape. The alpha channel data is left
       intact just deactivated.  This is the inverse of 'Copy'.
       </dd>

    <dt class="col-md-4">Copy</dt>
    <dd class="col-md-8">
       Turns 'On' the alpha/matte channel, then copies the
       grayscale intensity of the image, into the alpha channel, converting
       a grayscale mask into a transparent shaped mask ready to be colored
       appropriately. The color channels are not modified.  </dd>

    <dt class="col-md-4">Shape</dt>
    <dd class="col-md-8">
       As per 'Copy' but also colors the resulting shape mask with
       the current background color.  That is the RGB color channels is
       replaced, with appropriate alpha shape.
       </dd>

    <dt class="col-md-4">Remove</dt>
    <dd class="col-md-8">
       Composite the image over the background color.
       </dd>

    <dt class="col-md-4">Background</dt>
    <dd class="col-md-8">
       Set any fully-transparent pixel to the background color, while leaving
       it fully-transparent.  This can make some image file formats, such as
       PNG, smaller as the RGB values of transparent pixels are more uniform,
       and thus can compress better.
       </dd>
</dl>

<p>Note that while the obsolete <code>+matte</code> operation was the
same as "<code><a href="#alpha" >-alpha</a> Off</code>", the <code>
>-matte</code> operation was the same as "<code><a href="#alpha" >-alpha</a>
Set</code>" and not "<code><a href="#alpha" >-alpha</a> On</code>".  </p>

<div style="margin: auto;">
 <h3 class="magick-header"><a id="annotate"></a>
 -annotate <var>degrees</var> <var>text</var><br />
 -annotate <var>Xdegrees</var>x<var>Ydegrees</var> <var>text</var><br /> -annotate <var>Xdegrees</var>x<var>Ydegrees</var> {+-}<var>t<sub>x</sub></var>{+-}<var>t<sub>y</sub></var> <var>text</var><br /> -annotate {+-}<var>t<sub>x</sub></var>{+-}<var>t<sub>y</sub></var> <var>text</var></h3>
</div>

<p class="magick-description">Annotate an image with text</p>

<p>This is a convenience for annotating an image with text. For more precise
control over text annotations, use <a href="#draw">-draw</a>.</p>


<p>The values <var>Xdegrees</var> and <var>Ydegrees</var>
control the shears applied to the text, while <var>t<sub>x</sub></var> and <var>t<sub>y</sub></var> are offsets that give the location of the text relative any <a href="#gravity" >-gravity</a> setting and defaults to the upper left corner of the image.</p>

<p>Using <a href="#annotate">-annotate</a> <var>degrees</var>
or <a href="#annotate">-annotate</a> <var>degrees</var>x<var>degrees</var> produces an unsheared rotation of the text. The
direction of the rotation is positive, which means a clockwise rotation if <var>degrees</var> is positive. (This conforms to the usual mathematical
convention once it is realized that the positive <var>y</var>–direction is
conventionally considered to be <var>downward</var> for images.)</p>

<p>The new (transformed) coordinates (<var>x'</var>, <var>y'</var>) of a pixel at position (<var>x</var>, <var>y</var>) in the image are calculated using the following matrix
equation.</p>

<p class="text-center"><img class="img-thumbnail" alt="annotate transformation"  src="<?php
echo $_SESSION['RelativePath']?>/../image/annotate.png"/></p>

<p>If <var>t<sub>x</sub></var> and <var>t<sub>y</sub></var> are omitted, they default to 0. This makes the
bottom-left of the text becomes the upper-left corner of the image, which is
probably undesirable. Adding a <a href="#gravity" >-gravity</a> option in this
case leads to nice results.</p>

<p>Text is any UTF-8 encoded character sequence.  If <var>text</var>
is of the form '@mytext.txt', the text is read from the file
<code>mytext.txt</code>.  Text  in a file is taken literally; no embedded
formatting characters are recognized.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="antialias"></a>-antialias</h3>
</div>

<p class="magick-description">Enable/Disable of the rendering of anti-aliasing pixels when drawing fonts and lines.</p>

<p>By default, objects (e.g. text, lines, polygons, etc.) are antialiased when
drawn.  Use <a href="#antialias">+antialias</a> to disable the addition of
antialiasing edge pixels.  This will then reduce the number of colors added to
an image to just the colors being directly drawn.  That is, no mixed colors
are added when drawing such objects. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="append"></a>-append</h3>
</div>

<p class="magick-description">Join current images vertically or horizontally.</p>

<p>This option creates a single longer image, by joining all the current
images in sequence top-to-bottom. Use <a href="#append">+append</a> to
stack images left-to-right. </p>

<p>If they are not of the same width, narrower images are padded with the
current <a href="#background">-background</a> color setting, and their
position relative to each other can be controlled by the current <a
href="#gravity">-gravity</a> setting. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="attenuate"></a>-attenuate <var>value</var></h3>
</div>

<p class="magick-description">Lessen (or intensify) when adding noise to an image.</p>

<p>If unset the value is equivalent to 1.0, or a maximum noise addition</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="authenticate"></a>-authenticate <var>password</var></h3>
</div>

<p class="magick-description">Decrypt a PDF with a password.</p>

<p>Use this option to supply a <var>password</var> for decrypting
a PDF that has been encrypted using Microsoft Crypto API (MSC API). The
encrypting using the MSC API is not supported.</p>

<p>For a different encryption method, see <a href="#encipher">-encipher</a>
and <a href="#decipher">-decipher</a>. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="auto-gamma"></a>-auto-gamma</h3>
</div>

<p class="magick-description">Automagically adjust gamma level of image.</p>

<p>This calculates the mean values of an image, then applies a calculated  <a
href="#gamma" >-gamma</a> adjustment so that is the mean color exists in the
image it will get a have a value of 50%. </p>

<p>This means that any solid 'gray' image becomes 50% gray. </p>

<p>This works well for real-life images with little or no extreme dark and
light areas, but tend to fail for images with large amounts of bright sky or
dark shadows. It also does not work well for diagrams or cartoon like images.
</p>

<p>It uses the <a href="#channel" >-channel</a> setting, (including the
'<var>sync</var>' flag for channel synchronization), to determine which color
values is used and modified. As the default <a href="#channel"
>-channel</a> setting is '<var>RGB,sync</var>', channels are modified
together by the same gamma value, preserving colors. </p>



<div style="margin: auto;">
  <h3 class="magick-header"><a id="auto-level"></a>-auto-level</h3>
</div>

<p class="magick-description">Automagically adjust color levels of image.</p>

<p>This is a 'perfect' image normalization operator.  It finds the exact
minimum and maximum color values in the image and then applies a <a
href="#level" >-level</a> operator to stretch the values to the full range of
values. </p>

<p>The operator is not typically used for real-life images, image scans, or
JPEG format images, as a single 'out-rider' pixel can set a bad min/max values
for the <a href="#level" >-level</a> operation.  On the other hand it is the
right operator to use for color stretching gradient images being used to
generate Color lookup tables, distortion maps, or other 'mathematically'
defined images.  </p>

<p>The operator is very similar to the <a href="#normalize">-normalize</a>, <a
href="#contrast-stretch" >-contrast-stretch</a>, and <a href="#linear-stretch"
>-linear-stretch</a> operators, but without 'histogram binning' or 'clipping'
problems that these operators may have. That is <a href="#auto-level"
>-auto-level</a> is the perfect or ideal version these operators. </p>

<p>It uses the <a href="#channel" >-channel</a> setting, (including the
special '<var>sync</var>' flag for channel synchronization), to determine
which color values are used and modified. As the default <a
href="#channel" >+channel</a> setting is '<var>RGB,sync</var>', the
'<var>sync</var>' ensures that the color channels will are modified
together by the same gamma value, preserving colors, and ignoring
transparency. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="auto-orient"></a>-auto-orient</h3>
</div>

<p class="magick-description">adjusts an image so that its orientation is suitable for viewing (i.e. top-left orientation).</p>

<p>This operator reads and resets the EXIF image profile setting 'Orientation'
and then performs the appropriate 90 degree rotation on the image to orient
the image, for correct viewing. </p>

<p>This EXIF profile setting is usually set using a gravity sensor in digital
camera, however photos taken directly downward or upward may not have an
appropriate value.  Also images that have been orientation 'corrected' without
reseting this setting, may be 'corrected' again resulting in a incorrect
result.  If the EXIF profile was previously stripped, the  <a
href="#auto-orient" >-auto-orient</a> operator will do nothing. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="average"></a>-average</h3>
</div>

<p class="magick-description">Average a set of images.</p>

<p>An error results if the images are not identically sized.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="backdrop"></a>-backdrop</h3>
</div>

<p class="magick-description">Display the image centered on a backdrop.</p>

<p>This backdrop covers the entire workstation screen and is useful for hiding
other X window activity while viewing the image. The color of the backdrop is
specified as the background color. The color is specified using the format
described under the <a href="#fill">-fill</a> option.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="background"></a>-background <var>color</var></h3>
</div>

<p class="magick-description">Set the background color.</p>

<p>The color is specified using the format described under the <a
href="#fill">-fill</a> option. The default background color (if none is
specified or found in the image) is white.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="bench"></a>-bench <var>iterations</var></h3>
</div>

<p class="magick-description">Measure performance.</p>

<p>Repeat the entire command for the given number of <var>iterations</var> and report the user-time and elapsed time. For instance,
consider the following command and its output.  Modify the benchmark with the
-duration to run the benchmark for a fixed number of seconds and -concurrent
to run the benchmark in parallel (requires the OpenMP feature).</p>

<pre><code>
-> convert logo: -resize 200% -bench 5 logo.png
Performance[1]: 5i 1.344ips 1.000e 3.710u 0:03.720
Performance[2]: 5i 1.634ips 0.549e 3.890u 0:03.060
Performance[3]: 5i 2.174ips 0.618e 3.190u 0:02.300
Performance[4]: 5i 1.678ips 0.555e 3.810u 0:02.980
Performance[4]: 5i 0.875657ips 6.880u 0:05.710
</code></pre>

<p>In this example, 5 iterations were completed at 2.174 iterations per
second, using 3 threads and 3.190 seconds of the user allotted time, for
a total elapsed time of 2.300 seconds.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="bias"></a>-bias <var>value</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">Add bias when convolving an image.</p>

<p>This option shifts the output of <?php option("convolve"); ?>  so that
positive and negative results are relative to the specified bias value. </p>

<p>This is important for non-HDRI compilations of ImageMagick when dealing
with convolutions that contain negative as well as positive values. This is
especially the case with convolutions involving high pass filters or edge
detection. Without an output bias, the negative values are clipped at
zero.</p>

<p>When using an ImageMagick with the HDRI compile-time setting, <?php option("bias"); ?> is not needed, as ImageMagick is able to store/handle any
negative results without clipping to the color value range
(0..QuantumRange).</p>

<p>See the discussion on HDRI implementations of ImageMagick on the page <a
href="<?php echo $_SESSION['RelativePath']
?>/../script/high-dynamic-range.php" >High Dynamic-Range Images</a>. For more
about HDRI go the ImageMagick <a
href="https://www.imagemagick.org/Usage/basics/#hdri" >Usage</a> pages or this
<a
href="http://en.wikipedia.org/wiki/High_dynamic_range_imaging">Wikipedia</a>
entry.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="black-point-compensation"></a>-black-point-compensation</h3>
</div>

<p class="magick-description">Use black point compensation.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="black-threshold"></a>-black-threshold <var>value</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">Force to black all pixels below the threshold while leaving all pixels at or above the threshold unchanged.</p>

<p> The threshold value can be given as a percentage or as an absolute integer
value within [0, <var>QuantumRange</var>] corresponding to the
desired <?php option("channel"); ?> value. See <?php option("threshold"); ?>
for more details on thresholds and resulting values.  </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="blend"></a>-blend <var>geometry</var></h3>
</div>

<p class="magick-description">blend an image into another by the given absolute value or percent.</p>

<p>Blend will average the images together ('plus') according to the
percentages given and each pixels transparency.  If only a single percentage
value is given it sets the weight of the composite or 'source' image, while
the background image is weighted by the exact opposite amount. That is a
<code>-blend 30%</code> merges 30% of the 'source' image with 70% of the
'destination' image.  Thus it is equivalent to <code>-blend 30x70%</code>.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="blue-primary"></a>-blue-primary <var>x</var>,<var>y</var></h3>
</div>

<p class="magick-description">Set the blue chromaticity primary point.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="blue-shift"></a>-blue-shift <var>factor</var></h3>
</div>

<p class="magick-description">simulate a scene at nighttime in the moonlight.  Start with a factor of 1.5</p>

<div style="margin: auto;">

<div style="margin: auto;">
  <h3 class="magick-header"><a id="blur"></a>-blur <var>radius</var><br />-blur <var>radius</var>x<var>sigma</var></h3>
</div>

<p class="magick-description">Reduce image noise and reduce detail levels.</p>

<p>Convolve the image with a Gaussian or normal distribution using the given
<var >Sigma</var> value.  The formula is:</p>

<p class="text-center"><img class="img-thumbnail" alt="gaussian distribution" width="243px" height="42px" src="<?php echo $_SESSION['RelativePath']?>/../image/gaussian-blur.png"/></p>

<p>The <var >Sigma</var> value is the important argument, and
determines the actual amount of blurring that will take place. </p>

<p>The <var >Radius</var> is only used to determine the size of the
array which will hold the calculated Gaussian distribution. It should be an
integer.  If not given, or set to zero, IM will calculate the largest possible
radius that will provide meaningful results for the Gaussian distribution.
</p>

<p>The larger the <var >Radius</var> the slower the
operation is. However too small a <var >Radius</var>, and sever
aliasing effects may result.  As a guideline, <var >Radius</var>
should be at least twice the <var >Sigma</var> value, though three
times will produce a more accurate result. </p>

<p>This option differs from <a href="#gaussian-blur">-gaussian-blur</a> simply
by taking advantage of the separability properties of the distribution.  Here
we apply a single-dimensional Gaussian matrix in the horizontal direction,
then repeat the process in the vertical direction.</p>

<p>The <a href="#virtual-pixel">-virtual-pixel</a> setting will determine how
pixels which are outside the image proper are blurred into the final result.
</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="border"></a>-border <var>geometry</var></h3>
</div>

<p class="magick-description">Surround the image with a border of color. </p>

<p>Set the width and height using the <var>size</var> portion of the
<var>geometry</var> argument.  <?php seeGeometry(); ?> Offsets are
ignored. </p>

<p>As of IM 6.7.8-8, the <var>geometry</var> arguments behave as follows:</p>

<dl class="row">
<dt class="col-md-4"><var>value</var></dt>
<dd class="col-md-8">value is added to both left/right and top/bottom</dd>
<dt class="col-md-4"><var>value-x</var><kbd>x</kbd></dt>
<dd class="col-md-8">value-x is added only to left/right and top/bottom are unchanged</dd>
<dt class="col-md-4"><kbd>x</kbd><var>value-y</var></dt>
<dd class="col-md-8">value-y is added only to top/bottom and left/right are unchanged</dd>
<dt class="col-md-4"><var>value-x</var><kbd>x</kbd><var>value-y</var></dt>
<dd class="col-md-8">value-x is added to left/right and value-y added to top/bottom</dd>
<dt class="col-md-4"><var>value-x</var><kbd>x</kbd>0</dt>
<dd class="col-md-8">value-x is added only to left/right and top/bottom are unchanged</dd>
<dt class="col-md-4">0<kbd>x</kbd><var>value-y</var></dt>
<dd class="col-md-8">value-y is added only to top/bottom and left/right are unchanged</dd>
<dt class="col-md-4"><var>value</var>%</dt>
<dd class="col-md-8">value % of width is added to left/right and value % of height is added to top/bottom</dd>
<dt class="col-md-4"><var>value-x</var><kbd>x</kbd>%</dt>
<dd class="col-md-8">value-x % of width is added to left/right and to top/bottom</dd>
<dt class="col-md-4">x<var>value-y</var>%</dt>
<dd class="col-md-8">value-y % of height is added to top/bottom and to left/right</dd>
<dt class="col-md-4"><var>value-x</var>%<kbd>x</kbd><var>value-y</var>%</dt>
<dd class="col-md-8">value-x % of width is added to left/right and value-y % of height is added to top/bottom</dd>
<dt class="col-md-4"><var>value-x</var>%<kbd>x</kbd>0%</dt>
<dd class="col-md-8">value-x % of width is added to left/right and top/bottom are unchanged</dd>
<dt class="col-md-4">0%<kbd>x</kbd><var>value-y</var>%</dt>
<dd class="col-md-8">value-y % of height is added to top/bottom and left/right are unchanged</dd>
</dl>

<p>Set the border color by preceding with the <a
href="#bordercolor">-bordercolor</a> setting.</p>

<p>The <a href="#border">-border</a> operation is affected by the current <a
href="#compose">-compose</a> setting and assumes that this is using the default
'<code>Over</code>' composition method.  It generates an image of the appropriate
size colors by the current <a href="#bordercolor">-bordercolor</a> before
overlaying the original image in the center of this net image.  This means that
with the default compose method of '<code>Over</code>' any transparent parts may
be replaced by the current <a href="#bordercolor">-bordercolor</a> setting.</p>
<p>See also the <a href="#frame">-frame</a> option, which has more
functionality.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="bordercolor"></a>-bordercolor <var>color</var></h3>
</div>

<p class="magick-description">Set the border color.</p>

<p>The color is specified using the format described under the <a href="#fill">-fill</a> option.</p>

<p>The default border color is <code>#DFDFDF</code>, <span style="background-color: #dfdfdf;">this shade of gray</span>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="borderwidth"></a>-borderwidth <var>geometry</var> </h3>
</div>

<p class="magick-description">Set the border width.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="brightness-contrast"></a>-brightness-contrast <var>brightness</var><br />-brightness-contrast <var>brightness</var>{x<var>contrast</var>}{<var>%</var>}</h3>
</div>

<p class="magick-description">Adjust the brightness and/or contrast of the image.</p>

<p>Brightness and Contrast values apply changes to the input image. They are
not absolute settings. A brightness or contrast value of zero means no change.
The range of values is -100 to +100 on each. Positive values increase the
brightness or contrast and negative values decrease the brightness or contrast.
To control only contrast, set the brightness=0. To control only brightness,
set contrast=0 or just leave it off.</p>

<p>You may also use <a href="#fill">-channel</a> to control which channels to
apply the brightness and/or contrast change. The default is to apply the same
transformation to all channels.</p>

<p>Brightness and Contrast arguments are converted to offset and slope of a
linear transform and applied
using <a href="#fill">-function polynomial "slope,offset"</a>.</p>

<p>The slope varies from 0 at contrast=-100 to almost vertical at
contrast=+100. For brightness=0 and contrast=-100, the result are totally
midgray. For brightness=0 and contrast=+100, the result will approach but
not quite reach a threshold at midgray; that is the linear transformation
is a very steep vertical line at mid gray.</p>

<p>Negative slopes, i.e. negating the image, are not possible with this
function. All achievable slopes are zero or positive.</p>

<p>The offset varies from -0.5 at brightness=-100 to 0 at brightness=0 to +0.5
at brightness=+100. Thus, when contrast=0 and brightness=100, the result is
totally white. Similarly, when contrast=0 and brightness=-100, the result is
totally black.</p>

<p>As the range of values for the arguments are -100 to +100, adding the '%'
symbol is no different than leaving it off.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="cache"></a>-cache <var>threshold</var></h3>
</div>

<p class="magick-description">(This option has been replaced by the <a href='#limit'>-limit</a> option).</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="canny"></a>-canny <var>radius</var><br/>-canny <var>radius</var>x<var>sigma</var>{<var>+lower-percent</var>}{<var>+upper-percent</var>}</h3>
</div>

<p class="magick-description">Canny edge detector uses a multi-stage algorithm to detect a wide range of edges in the image.</p>

<p>The thresholds range from 0 to 100% (e.g. -canny 0x1+10%+30%) with {<var>+lower-percent</var>} &lt; {<var>+upper-percent</var>}. If {<var>+upper-percent</var>} is increased but {<var>+lower-percent</var>} remains the same, lesser edge components will be detected, but their lengths will be the same. If {<var>+lower-percent</var>} is increased but {<var>+upper-percent</var>} is the same, the same number of edge components will be detected but their lengths will be shorter. The default thresholds are shown. The <var>radius</var>x<var>sigma</var> controls a gaussian blur applied to the input image to reduce noise and smooth the edges.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="caption"></a>-caption <var>string</var></h3>
</div>

<p class="magick-description">Assign a caption to an image.</p>

<p>This option sets the caption meta-data of an image read in after this
option has been given.  To modify a caption of images already in memory use
"<code><a href="#set">-set</a> caption</code>". </p>

<p>The caption can contain special format characters listed in the <a
href="<?php echo $_SESSION['RelativePath']?>/../script/escape.php">Format and
Print Image Properties</a>. These attributes are expanded when the caption
is finally assigned to the individual images. </p>

<p>If the first character of <var>string</var> is <var>@</var>, the image caption is read from a file titled by the
remaining characters in the string.  Comments read in from a file are literal;
no embedded formatting characters are recognized.</p>

<p>Caption meta-data is not visible on the image itself. To do that use the
<a href="#annotate">-annotate</a> or <a href="#draw">-draw</a> options
instead.</p>

<p>For example,</p>

<pre><code>
-caption "%m:%f %wx%h"  bird.miff
</code></pre>

<p>produces an image caption of <code>MIFF:bird.miff 512x480</code> (assuming
that the image <code>bird.miff</code> has a width of 512 and a height of
480.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="cdl"></a>-cdl <var>filename</var></h3>
</div>

<p class="magick-description">color correct with a color decision list.</p>

<p>Here is an example color correction collection:</p>

<pre><code>
&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;ColorCorrectionCollection xmlns="urn:ASC:CDL:v1.2"&gt;
  &lt;ColorCorrection id="cc06668"&gt;
    &lt;SOPNode&gt;
      &lt;Slope&gt; 0.9 1.2 0.5 &lt;/Slope&gt;
      &lt;Offset&gt; 0.4 -0.5 0.6 &lt;/Offset&gt;
      &lt;Power&gt; 1.0 0.8 1.5 &lt;/Power&gt;
    &lt;/SOPNode&gt;
    &lt;SATNode&gt;
      &lt;Saturation&gt; 0.85 &lt;/Saturation&gt;
    &lt;/SATNode&gt;
  &lt;/ColorCorrection&gt;
&lt;/ColorCorrectionCollection&gt;
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="channel"></a>-channel <var>type</var></h3>
</div>

<p class="magick-description">Specify those image color channels to which subsequent operators are limited.</p>

<p>Choose from: <code>Red</code>, <code>Green</code>, <code>Blue</code>,
<code>Alpha</code>, <code>Gray</code>, <code>Cyan</code>, <code>Magenta</code>,
<code>Yellow</code>, <code>Black</code>, <code>Opacity</code>,
<code>Index</code>, <code>RGB</code>, <code>RGBA</code>, <code>CMYK</code>, or
<code>CMYKA</code>.</p>

<p>The channels above can also be specified as a comma-separated list or can be
abbreviated as a concatenation of the letters '<code>R</code>', '<code>G</code>',
'<code>B</code>', '<code>A</code>', '<code>O</code>', '<code>C</code>',
'<code>M</code>', '<code>Y</code>', '<code>K</code>'.

For example, to only select the <code>Red</code> and <code>Blue</code> channels
you can either use </p>
<pre><code>
-channel Red,Blue
</code></pre>
<p>or you can use the short hand form</p>
<pre><code>
-channel RB
</code></pre>

<p>All the channels that are present in an image can be specified using the
special channel type <code>All</code>. Not all operators are 'channel capable',
but generally any operators that are generally 'grey-scale' image operators,
will understand this setting.  See individual operator documentation. </p>

<br/>

<p>On top of the normal channel selection an extra flag can be specified,
'<code>Sync</code>'.  This is turned on by default and if set means that
operators that understand this flag should perform: cross-channel
synchronization of the channels. If not specified, then most grey-scale
operators will apply their image processing operations to each individual
channel (as specified by the rest of the <a href="#channel">-channel</a>
setting) completely independently from each other. </p>

<p>For example for operators such as <a href="#auto-level">-auto-level</a> and
<a href="#auto-gamma">-auto-gamma</a> the color channels are modified
together in exactly the same way so that colors will remain in-sync. Without
it being set, then each channel is modified separately and
independently, which may produce color distortion. </p>

<p>The <a href="#morphology">-morphology</a> '<code>Convolve</code>' method
and the <a href="#compose">-compose</a> mathematical methods, also understands
the '<code>Sync</code>' flag to modify the behavior of pixel colors according
to the alpha channel (if present). That is to say it will modify the image
processing with the understanding that fully-transparent colors should not
contribute to the final result. </p>

<p>Basically, by default, operators work with color channels in synchronous, and
treats transparency as special, unless the <a href="#channel">-channel</a>
setting is modified so as to remove the effect of the '<code>Sync</code>' flag.
How each operator does this depends on that operators current implementation.
Not all operators understands this flag at this time, but that is changing.
</p>

<p>To print a complete list of channel types, use <a href="#list">-list
channel</a>.</p>

<p>By default, ImageMagick sets <a href="#channel">-channel</a> to the value
'<code>RGBK,sync</code>', which specifies that operators act on all color
channels except the transparency channel, and that all the color channels are
to be modified in exactly the same way, with an understanding of transparency
(depending on the operation being applied).  The 'plus' form <a
href="#channel" >+channel</a> will reset the value back to this default. </p>

<p>Options that are affected by the <a href="#channel" >-channel</a> setting
include the following.

<a href="#auto-gamma">-auto-gamma</a>,
<a href="#auto-level">-auto-level</a>,
<a href="#black-threshold">-black-threshold</a>,
<a href="#blur">-blur</a>,
<a href="#clamp">-clamp</a>,
<a href="#clut">-clut</a>,
<a href="#combine">-combine</a>,
<a href="#composite">-composite</a> (Mathematical compose methods only),
<a href="#convolve">-convolve</a>,
<a href="#contrast-stretch">-contrast-stretch</a>,
<a href="#evaluate">-evaluate</a>,
<a href="#function">-function</a>,
<a href="#fx">-fx</a>,
<a href="#gaussian-blur">-gaussian-blur</a>,
<a href="#hald-clut">-hald-clut</a>,
<a href="#motion-blur">-motion-blur</a>,
<a href="#morphology">-morphology</a>,
<a href="#negate">-negate</a>,
<a href="#normalize">-normalize</a>,
<a href="#ordered-dither">-ordered-dither</a>,
<a href="#radial-blur">-radial-blur</a>,
<a href="#random-threshold">-random-threshold</a>,
<a href="#separate">-separate</a>,
<a href="#threshold">-threshold</a>, and
<a href="#white-threshold">-white-threshold</a>.
</p>

<p>Warning, some operators behave differently when the <a href="#channel"
>+channel</a> default setting is in effect, verses ANY user defined <a
href="#channel" >-channel</a> setting (including the equivalent of the
default). These operators have yet to be made to understand the newer 'Sync'
flag. </p>

<p>For example <a href="#threshold">-threshold</a> will by default grayscale
the image before thresholding, if no <a href="#channel" >-channel</a> setting
has been defined. This is not 'Sync flag controlled, yet. </p>

<p>Also some operators such as <a href="#blur">-blur</a>, <a
href="#gaussian-blur">-gaussian-blur</a>, will modify their handling of the
color channels if the '<code>alpha</code>' channel is also enabled by <a
href="#channel" >-channel</a>.  Generally this done to ensure that
fully-transparent colors are treated as being fully-transparent, and thus any
underlying 'hidden' color has no effect on the final results.  Typically
resulting in 'halo' effects. The newer <a href="#morphology">-morphology</a>
convolution equivalents however does have a understanding of the 'Sync' flag
and will thus handle transparency correctly by default. </p>

<p>As a alpha channel is optional within images, some operators will read the
color channels of an image as a greyscale alpha mask, when the image has no
alpha channel present, and the <a href="#channel" >-channel</a> setting tells
the operator to apply the operation using alpha channels. The <a
href="#clut">-clut</a> operator is a good example of this. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="channel-fx"></a>-channel-fx <var>expression</var></h3>
</div>

<p class="magick-description">exchange, extract, or copy one or more image channels.</p>

<p>The expression consists of one or more channels, either mnemonic or numeric (e.g. red or 0, green or 1, etc.), separated by certain operation symbols as follows:</p>

<pre><code>
&lt;=&gt;  exchange two channels (e.g. red&lt;=&gt;blue)
=&gt;   copy one channel to another channel (e.g. red=&gt;green)
=    assign a constant value to a channel (e.g. red=50%)
,    write new image with channels in the specified order (e.g. red, green)
;    add a new output image for the next set of channel operations (e.g. red; green; blue)
|    move to the next input image for the source of channel data (e.g. | gray=>alpha)
</code></pre>

<p>For example, to create 3 grayscale images from the red, green, and blue channels of an image, use:</p>

<pre><code>
-channel-fx "red; green; blue"
</code></pre>

<p>A channel without an operation symbol implies separate (i.e, semicolon).</p>

<p>Here we take an sRGB image and a grayscale image and inject the grayscale image into the alpha channel:</p>
<pre><code>
convert wizard.png mask.pgm -channel-fx '| gray=>alpha' wizard-alpha.png
</code></pre>
<p>Use a similar command to define a read mask:</p>
<pre><code>
convert wizard.png mask.pgm -channel-fx '| gray=>read-mask' wizard-mask.png
</code></pre>

<p>Add <code>-debug pixel</code> prior to the <code>-channel-fx</code> option to track the channel morphology.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="charcoal"></a>-charcoal <var>factor</var></h3>
</div>

<p class="magick-description">Simulate a charcoal drawing.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="chop"></a>-chop <var>geometry</var></h3>
</div>

<p class="magick-description">Remove pixels from the interior of an image.</p>

<p><?php seeGeometry(); ?> The <var>width</var>
and <var>height</var> given in the of the <var>size</var>
portion of the <var>geometry</var> argument give the number of
columns and rows to remove. The <var>offset</var> portion of
the <var>geometry</var> argument is influenced by
a <a href="#gravity">-gravity</a> setting, if present.</p>

<p>The <a href="#chop">-chop</a> option removes entire rows and columns,
and moves the remaining corner blocks leftward and upward to close the gaps.</p>

<p>While it can remove internal rows and columns of pixels, it is more
typically used with as <a href="#gravity">-gravity</a> setting and zero
offsets so as to remove a single edge from an image.  Compare this to <a
href="#shave" >-shave</a> which removes equal numbers of pixels from opposite
sides of the image.  </p>

<p>Using <a href="#chop">-chop</a> effectively undoes the results of a <a
href="#splice">-splice</a> that was given the same <var>geometry</var> and <a href="#gravity">-gravity</a> settings. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clamp"></a>-clamp</h3>
</div>

<p class="magick-description">set each pixel whose value is below zero to zero and any the pixel whose value is above the quantum range to the quantum range (e.g. 65535) otherwise the pixel value remains unchanged.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clip"></a>-clip</h3>
</div>

<p class="magick-description">Apply the clipping path if one is present.</p>

<p>If a clipping path is present, it is applied to subsequent operations.</p>

<p>For example, in the command</p>

<pre><code>
convert cockatoo.tif -clip -negate negated.tif
</code></pre>

<p>only the pixels within the clipping path are negated.</p>

<p>The <a href="#clip">-clip</a> feature requires SVG support. If the SVG
delegate library is not present, the option is ignored.</p>

<p>Use <a href="#clip">+clip</a> to disable clipping for subsequent operations.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clip-mask"></a>-clip-mask</h3>
</div>

<p class="magick-description">Clip the image as defined by this mask.</p>

<p>Use the alpha channel of the current image as a mask.  Any areas that is
white is not modified by any of the 'image processing operators' that follow,
until the mask is removed. Pixels in the black areas of the clip mask are
modified per the requirements of the operator. </p>

<p>In some ways this is similar to (though not the same) as defining
a rectangular <a href="#region" >-region</a>, or using the negative of the
mask (third) image in a three image <a href="#composite" >-composite</a>,
operation. </p>

<p>Use <a href="#clip-mask">+clip-mask</a> to disable clipping for subsequent operations.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clip-path"></a>-clip-path <var>id</var></h3>
</div>

<p class="magick-description">Clip along a named path from the 8BIM profile.</p>

<p>This is identical to <a href="#clip">-clip</a> except choose a specific clip path in the event the image has more than one path available. </p>

<p>Use <a href="#clip-path">+clip-path</a> to disable clipping for subsequent operations.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clone"></a>-clone <var>index(s)</var></h3>
</div>

<p class="magick-description">make a clone of an image (or images).</p>

<p>Inside parenthesis (where the operator is normally used) it will make a
clone of the images from the last 'pushed' image sequence, and adds them to
the end of the current image sequence. Outside parenthesis
(not recommended) it clones the images from the current image sequence. </p>

<p>Specify the image by its index in the sequence.  The first image is index
0.  Negative indexes are relative to the end of the sequence; for
example, <code>−1</code>
represents the last image of the sequence.  Specify a range of images with a
dash (e.g. <code>0−4</code>).  Separate multiple indexes with commas but no
spaces (e.g. <code>0,2,5</code>).  A value of '<code>0−−1</code> will
effectively clone all the images. </p>

<p>The <a href="#clone">+clone</a> will simply make a copy of the last image
in the image sequence, and is thus equivalent to using a argument of
'<code>−1</code>'. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="clut"></a>-clut</h3>
</div>

<p class="magick-description">Replace the channel values in the first image using each corresponding channel in the second image as a <b>c</b>olor <b>l</b>ook<b>u</b>p <b>t</b>able.</p>

<p>The second (LUT) image is ordinarily a gradient image containing the
histogram mapping of how each channel should be modified. Typically it is a
either a single row or column image of replacement color values. If larger
than a single row or column, values are taken from a diagonal line from
top-left to bottom-right corners.</p>

<p>The lookup is further controlled by the <a
href="#interpolate">-interpolate</a> setting, which is especially handy for an
LUT which is not the full length needed by the ImageMagick installed Quality
(Q) level. Good settings for this are the '<code>bilinear</code>' and
'<code>bicubic</code>' interpolation settings, which give smooth color
gradients, and the '<code>integer</code>' setting for a direct, unsmoothed
lookup of color values. </p>

<p>This operator is especially suited to replacing a grayscale image with a
specific color gradient from the CLUT image. </p>

<p>Only the channel values defined by the <a href="#channel">-channel</a>
setting will have their values replaced. In particular, since the default <a
href="#channel">-channel</a> setting is <code>RGB</code>, this means that
transparency (alpha/matte channel) is not affected, unless the <a
href="#channel">-channel</a> setting is modified. When the alpha channel is
set, it is treated by the <a href="#clut" >-clut</a> operator in the same way
as the other channels, implying that alpha/matte values are replaced using the
alpha/matte values of the original image. </p>

<p>If either the image being modified, or the lookup image, contains no
transparency (i.e. <a href="#alpha" >-alpha</a> is turned 'off') but the <a
href="#channel">-channel</a> setting includes alpha replacement, then it is
assumed that image represents a grayscale gradient which is used for the
replacement alpha values.  That is you can use a grayscale CLUT image to
adjust a existing images alpha channel, or you can color a grayscale image
using colors form CLUT containing the desired colors, including transparency.
</p>

<p>See also <a href="#hald-clut" >-hald-clut</a> which replaces colors
according to the lookup of the full color RGB value from a 2D representation
of a 3D color cube. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="coalesce"></a>-coalesce</h3>
</div>

<p class="magick-description">Fully define the look of each frame of an GIF animation sequence, to form a 'film strip' animation.</p>

<p>Overlay each image in an image sequence according to
its <a href="#dispose">-dispose</a> meta-data, to reproduce the look of
an animation at each point in the animation sequence. All images should be
the same size, and are assigned appropriate GIF disposal settings for the
animation to continue working as expected as a GIF animation.  Such frames
are more easily viewed and processed than the highly optimized GIF overlay
images.  </p>

<p>The animation can be re-optimized after processing using
the <a href="#layers">-layers</a> method '<code>optimize</code>', although
there is no guarantee that the restored GIF animation optimization is
better than the original. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="colorize"></a>-colorize <var>value</var></h3>
</div>

<p class="magick-description">Colorize the image by an amount specified by <var>value</var> using the color specified by the most recent <a href="#fill" >-fill</a> setting.</p>

<p>Specify the amount of colorization as a percentage. Separate colorization
values can be applied to the red, green, and blue channels of the image with
a comma-delimited list of colorization
values (e.g., <code>-colorize 0,0,50</code>).</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="colormap"></a>-colormap <var>type</var></h3>
</div>

<p class="magick-description">Define the colormap type.</p>

<p>The <var>type</var> can be  <code>shared</code> or <code>private</code>.</p>

<p>This option only applies when the default X server visual
is <code>PseudoColor</code> or <code>GrayScale</code>. Refer
to <a href="#visual">-visual</a> for more details. By default,
a shared colormap is allocated. The image shares colors with
other X clients. Some image colors could be approximated,
therefore your image may look very different than intended.
If <code>private</code> is chosen, the image colors appear exactly
as they are defined. However, other clients may go <var>technicolor</var>
when the image colormap is installed.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="colors"></a>-colors <var>value</var></h3>
</div>

<p class="magick-description">Set the preferred number of colors in the image.</p>

<p>The actual number of colors in the image may be less than your request,
but never more. Note that this a color reduction option. Images with fewer
unique colors than specified by <var>value</var> will have any
duplicate or unused colors removed.  The ordering of an existing color
palette may be altered. When converting an image from color to grayscale,
it is more efficient to convert the image to the gray colorspace before
reducing the number of colors. Refer to
the <a href="<?php echo $_SESSION['RelativePath']?>/../script/quantize.php">
color reduction algorithm</a> for more details.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="color-matrix"></a>-color-matrix <var>matrix</var></h3>
</div>

<p class="magick-description">apply color correction to the image.</p>

<p>This option permits saturation changes, hue rotation, luminance to alpha,
and various other effects.  Although variable-sized transformation matrices
can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6
for CMYKA (or RGBA with offsets).  The matrix is similar to those used by
Adobe Flash except offsets are in column 6 rather than 5 (in support of
CMYKA images) and offsets are normalized (divide Flash offset by 255).</p>

<p>As an example, to add contrast to an image with offsets, try this command:</p>

<pre><code>
convert kittens.jpg -color-matrix \
  " 1.5 0.0 0.0 0.0, 0.0, -0.157 \
    0.0 1.5 0.0 0.0, 0.0, -0.157 \
    0.0 0.0 1.5 0.0, 0.0, -0.157 \
    0.0 0.0 0.0 1.0, 0.0,  0.0 \
    0.0 0.0 0.0 0.0, 1.0,  0.0 \
    0.0 0.0 0.0 0.0, 0.0,  1.0" kittens.png
</code></pre>
<div style="margin: auto;">
  <h3 class="magick-header"><a id="colorspace"></a>-colorspace <var>value</var></h3>
</div>

<p class="magick-description">Set the image colorspace.</p>

<p>Choices are:</p>

<pre><code>
CMY          CMYK         Gray         HCL
HCLp         HSB          HSI          HSL
HSV          HWB          Lab          LCHab
LCHuv        LMS          Log          Luv
OHTA         Rec601YCbCr  Rec709YCbCr  RGB
scRGB        sRGB         Transparent  xyY
XYZ          YCbCr        YCC          YDbDr
YIQ          YPbPr        YUV          Undefined
</code></pre>

<p>To print a complete list of colorspaces, use <a href="#list">-list colorspace</a>.</p>

<p>For a more accurate color conversion to or from the linear RGB, CMYK, or grayscale colorspaces, use the <a href="#profile">-profile</a> option.  Note, ImageMagick assumes the sRGB colorspace if the image format does not indicate otherwise.  For colorspace conversion, the gamma function is first removed to produce linear RGB.</p>

<table class="table table-sm table-striped">
        <caption>Conversion of RGB to Other Color Spaces</caption>
        <tr><th valign="middle">CMY</th></tr>
        <tr><td valign="middle">C=<var>QuantumRange</var>−R</td></tr>
        <tr><td valign="middle">M=<var>QuantumRange</var>−G</td></tr>
        <tr><td valign="middle">Y=<var>QuantumRange</var>−B</td></tr>
        <tr><th valign="middle">CMYK — starts with CMY from above</th></tr>
        <tr><td valign="middle">K=min(C,Y,M)</td></tr>
        <tr><td valign="middle">C=<var>QuantumRange</var>*(C−K)/(<var>QuantumRange</var>−K)</td></tr>
        <tr><td valign="middle">M=<var>QuantumRange</var>*(M−K)/(<var>QuantumRange</var>−K)</td></tr>
        <tr><td valign="middle">Y=<var>QuantumRange</var>*(Y−K)/(<var>QuantumRange</var>−K)</td></tr>

        <tr><th valign="middle">Gray</th></tr>
        <tr><td valign="middle">Gray = 0.298839*R+0.586811*G+0.114350*B</td></tr>

        <tr><th valign="middle">HSB — Hue, Saturation, Brightness; like a cone peak downward</th></tr>
        <tr><td valign="middle">H=angle around perimeter (0 to 360 deg); H=0 is red; increasing angles toward green</td></tr>
        <tr><td valign="middle">S=distance from axis outward</td></tr>
        <tr><td valign="middle">B=distance along axis from bottom upward; B=max(R,G,B); <var>intensity-like</var></td></tr>

        <tr><th valign="middle">HSL — Hue, Saturation, Lightness; like a double cone end-to-end with peaks at very top and bottom</th></tr>
        <tr><td valign="middle">H=angle around perimeter (0 to 360 deg); H=0 is red; increasing angles toward green</td></tr>
        <tr><td valign="middle">S=distance from axis outward</td></tr>
        <tr><td valign="middle">L=distance along axis from bottom upward; L=0.5*max(R,G,B) + 0.5*min(R,G,B); <var>intensity-like</var></td></tr>

        <tr><th valign="middle">HWB — Hue, Whiteness, Blackness</th></tr>
        <tr><td valign="middle">Hue (complicated equation)</td></tr>
        <tr><td valign="middle">Whiteness (complicated equation)</td></tr>
        <tr><td valign="middle">Blackness (complicated equation)</td></tr>

        <tr><th valign="middle">LAB</th></tr>
        <tr><td valign="middle">L (complicated equation relating X,Y,Z)</td></tr>
        <tr><td valign="middle">A (complicated equation relating X,Y,Z)</td></tr>
        <tr><td valign="middle">B (complicated equation relating X,Y,Z)</td></tr>

        <tr><th valign="middle">LOG</th></tr>
        <tr><td valign="middle">I1 (complicated equation involving logarithm of R)</td></tr>
        <tr><td valign="middle">I2 (complicated equation involving logarithm of G)</td></tr>
        <tr><td valign="middle">I3 (complicated equation involving logarithm of B)</td></tr>

        <tr><th valign="middle">OHTA — approximates principal components transformation</th></tr>
        <tr><td valign="middle">I1=0.33333*R+0.33334*G+0.33333*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">I2=(0.50000*R+0.00000*G−0.50000*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">I3=(−0.25000*R+0.50000*G−0.25000*B)*(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">Rec601Luma</th></tr>
        <tr><td valign="middle">Gray = 0.298839*R+0.586811*G+0.114350*B</td></tr>

        <tr><th valign="middle">Rec601YCbCr</th></tr>
        <tr><td valign="middle">Y=0.2988390*R+0.5868110*G+0.1143500*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">Cb=(−0.168736*R-0.331264*G+0.500000*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">Cr=(0.500000*R−0.418688*G−0.081312*B)*(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">Rec709Luma</th></tr>
        <tr><td valign="middle">Gray=0.212656*R+0.715158*G+0.072186*B</td></tr>

        <tr><th valign="middle">Rec709YCbCr</th></tr>
        <tr><td valign="middle">Y=0.212656*R+0.715158*G+0.072186*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">Cb=(−0.114572*R−0.385428*G+0.500000*B)+(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">Cr=(0.500000*R−0.454153*G−0.045847*B)+(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">sRGB</th></tr>
        <tr><td valign="middle">if R ≤ .0.0031308 then Rs=R/12.92 else Rs=1.055 R ^ (1.0 / 2.4) ? 0.055</td></tr>
        <tr><td valign="middle">if G ≤ .0.0031308 then Gs=B/12.92 else Gs=1.055 R ^ (1.0 / 2.4) ? 0.055</td></tr>
        <tr><td valign="middle">if B ≤ .0.0031308 then Bs=B/12.92 else Bs=1.055 R ^ (1.0 / 2.4) ? 0.055</td></tr>

        <tr><th valign="middle">XYZ</th></tr>
        <tr><td valign="middle">X=0.4124564*R+0.3575761*G+0.1804375*B</td></tr>
        <tr><td valign="middle">Y=0.2126729*R+0.7151522*G+0.0721750*B</td></tr>
        <tr><td valign="middle">Z=0.0193339*R+0.1191920*G+0.9503041*B</td></tr>

        <tr><th valign="middle">YCC</th></tr>
        <tr><td valign="middle">Y=(0.298839*R+0.586811*G+0.114350*B) (with complicated scaling); <var>intensity-like</var></td></tr>
        <tr><td valign="middle">C1=(−0.298839*R−0.586811*G+0.88600*B) (with complicated scaling)</td></tr>
        <tr><td valign="middle">C2=(0.70100*R−0.586811*G−0.114350*B) (with complicated scaling)</td></tr>

        <tr><th valign="middle">YCbCr</th></tr>
        <tr><td valign="middle">Y=0.2988390*R+0.5868110*G+0.1143500*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">Cb=(−0.168736*R−0.331264*G+0.500000*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">Cr=(0.500000*R−0.418688*G−0.081312*B)*(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">YIQ</th></tr>
        <tr><td valign="middle">Y=0.298839*R+0.586811*G+0.114350*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">I=(0.59600*R−0.27400*G−0.32200*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">Q=(0.21100*R−0.52300*G+0.31200*B)*(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">YPbPr</th></tr>
        <tr><td valign="middle">Y=0.2988390*R+0.5868110*G+0.1143500*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">Pb=(−0.168736*R−0.331264*G+0.500000*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">Pr=(0.500000*R−0.418688*G−0.081312*B)*(<var>QuantumRange</var>+1)/2</td></tr>

        <tr><th valign="middle">YUV</th></tr>
        <tr><td valign="middle">Y=0.298839*R+0.586811*G+0.114350*B; <var>intensity-like</var></td></tr>
        <tr><td valign="middle">U=(−0.14740*R−0.28950*G+0.43690*B)*(<var>QuantumRange</var>+1)/2</td></tr>
        <tr><td valign="middle">V=(0.61500*R−0.51500*G−0.10000*B)*(<var>QuantumRange</var>+1)/2</td></tr>
</table>

<p>Note the scRGB colorspace requires HDRI support otherwise it behaves just like linear RGB.</p>

<p>Use the <code>Undefined</code> colorspace to identify multi-spectral images.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="combine"></a>-combine</h3>
  <h3 class="magick-header">+combine <var>colorspace</var></h3>
</div>

<p class="magick-description">Combine one or more images into a single image.</p>

<p>The channels (previously set by <a href="#channel">-channel</a>) of the
combined image are taken from the grayscale values of each image in the
sequence, in order. For the default -channel setting of <code>RGB</code>, this
means the first image  is assigned to the <code>Red</code> channel, the second
to the <code>Green</code> channel, the third to the <code>Blue</code>.</p>

<p>This option can be thought of as the inverse to <a
href="#separate">-separate</a>, so long as the channel settings are the same.
Thus, in the following example, the final image should be a copy of the
original.  </p>

<pre><code>
convert original.png -channel RGB -separate sepimage.png
convert sepimage-0.png sepimage-1.png sepimage-2.png -channel RGB \
  -combine imagecopy.png
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="comment"></a>-comment <var>string</var></h3>
</div>

<p class="magick-description">Embed a comment in an image.</p>

<p>This option sets the comment meta-data of an image read in after this
option has been given.  To modify a comment of images already in memory use
"<code><a href="#set">-set</a> comment</code>". </p>

<p>The comment can contain special format characters listed in the <a
href="<?php echo $_SESSION['RelativePath']?>/../script/escape.php">Format and
Print Image Properties</a>. These attributes are expanded when the comment
is finally assigned to the individual images. </p>

<p>If the first character of <var>string</var> is <var>@</var>, the image comment is read from a file titled by the
remaining characters in the string.  Comments read in from a file are literal;
no embedded formatting characters are recognized.</p>

<p>Comment meta-data are not visible on the image itself. To do that use the
<a href="#annotate">-annotate</a> or <a href="#draw">-draw</a> options
instead.</p>

<p>For example,</p>

<pre><code>
-comment "%m:%f %wx%h"  bird.miff
</code></pre>

<p>produces an image comment of <code>MIFF:bird.miff 512x480</code> (assuming
that the image <code>bird.miff</code> has a width of 512 and a height of
480.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="compare"></a>-compare</h3>
</div>

<p class="magick-description">mathematically and visually annotate the difference between an image and its reconstruction</p>

<p>This is a convert version of "<code>compare</code>" for two same sized images. The syntax is as follows, but other metrics are allowed.</p>

<pre><code>
convert image.png reference.png -metric RMSE -compare \ <br/> difference.png
</code></pre>

<p>To get the metric value use the string format "%[distortion]".</p>

<pre><code>
convert image.png reference.png -metric RMSE -compare -format \
   "%[distortion]" info:
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="complex"></a>-complex <var>operator</var></h3>
</div>

<p class="magick-description">perform complex mathematics on an image sequence</p>

Choose from these operators:

<pre><code>
add
conjugate
divide
magnitude-phase
multiply
real-imaginary
subtract
</code></pre>

<p>Optionally specify the <code>divide</code> operator SNR with <code><a href="#define">-define</a> complex:snr=float</code>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="compose"></a>-compose <var>operator</var></h3>
</div>

<p class="magick-description">Set the type of image composition.</p>

<p>See <a href="<?php echo
$_SESSION['RelativePath']?>/../script/compose.php">Alpha Compositing</a> for
a detailed discussion of alpha compositing.</p>

<p>This setting effects image processing operators that merge two (or more)
images together in some way.  This includes the operators,
<a href="#composite">-compare</a>,
<a href="#composite">-composite</a>,
<a href="#layers">-layers</a> composite,
<a href="#flatten">-flatten</a>,
<a href="#mosaic">-mosaic</a>,
<a href="#layers">-layers</a> merge,
<a href="#border">-border</a>,
<a href="#frame">-frame</a>,
and <a href="#extent">-extent</a>. </p>

<p>It is also one of the primary options for the "<code>composite</code>"
command.  </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="composite"></a>-composite</h3>
</div>

<p class="magick-description">Perform alpha composition on two images and an optional mask</p>

<p>Take the first image 'destination' and overlay the second 'source' image
according to the current <a href="#compose">-compose</a> setting. The location
of the 'source' or 'overlay' image is controlled according to <a
href="#gravity" >-gravity</a>, and <a href="#geometry" >-geometry</a>
settings. </p>

<p>If a third image is given this is treated as a grayscale blending 'mask' image
relative to the first 'destination' image. This mask is blended with the
source image.  However for the '<code>displace</code>' compose method, the
mask is used to provide a separate Y-displacement image instead. </p>

<p>If a <a href="#compose">-compose</a> method requires extra numerical
arguments or flags these can be provided by setting the  <a
href="#set">-set</a> '<code>option:compose:args</code>'
appropriately for the compose method. </p>

<p>Some <a href="#compose">-compose</a> methods can modify the 'destination'
image outside the overlay area. You can disable this by setting the special <a
href="#set">-set</a> '<code>option:compose:outside-overlay</code>'
to '<code>false</code>'.  </p>

<p>The SVG compositing specification requires that color and opacity values range between zero and QuantumRange inclusive.  You can permit values outside this range with this option: <a href="#set">-set</a> '<code>option:compose:clamp=false</code></p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="compress"></a>-compress <var>type</var></h3>
</div>

<p class="magick-description">Use pixel compression specified by <var>type</var> when writing the image.</p>

<p>Choices are: <code>None</code>, <code>BZip</code>, <code
>Fax</code>, <code>Group4</code>, <code
>JPEG</code>,  <code>JPEG2000</code>, <code
>Lossless</code>, <code>LZW</code>, <code
>RLE</code> or <code>Zip</code>.</p>

<p>To print a complete list of compression types, use <a href="#list">-list
compress</a>.</p>

<p>Specify <a href="#compress">+compress</a> to store the binary image in an
uncompressed format. The default is the compression type of the specified
image file.</p>

<p>If <code>LZW</code> compression is specified but LZW compression has not been
enabled, the image data is written in an uncompressed LZW format that can be
read by LZW decoders. This may result in larger-than-expected GIF files.</p>

<p><code>Lossless</code> refers to lossless JPEG, which is only available if the
JPEG library has been patched to support it. Use of lossless JPEG is generally
not recommended.</p>

<p>
When writing an ICO file, you may request that the images be encoded in
PNG format, by specifying <code>Zip</code> compression.</p>

<p>
When writing a JNG file, specify <code>Zip</code> compression to request that
the alpha channel be encoded in PNG "IDAT" format, or <code>JPEG</code>
to request that it be encoded in JPG "JDAA" format.</p>

<p>Use the <a href="#quality">-quality</a> option to set the compression level
to be used by JPEG, PNG, MIFF, and MPEG encoders.
Use the <a href="#sampling-factor">-sampling-factor</a> option to set the
sampling factor to be used by JPEG, MPEG, and YUV encoders for down-sampling
the chroma channels.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="connected-components"></a>-connected-components <var>connectivity</var></h3>
</div>

<p class="magick-description"><a href="<?php echo $_SESSION['RelativePath']?>/../script/connected-components.php">connected-components</a> labeling detects connected regions in an image, choose from 4 or 8 way connectivity.</p>

<p>Use <code><a href="#define" >-define</a> connected-components:verbose=true</code> to output statistics associated with each unique label.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="contrast"></a>-contrast</h3>
</div>

<p class="magick-description">Enhance or reduce the image contrast.</p>

<p>This option enhances the intensity differences between the lighter and
darker elements of the image. Use <a href="#contrast">-contrast</a> to enhance
the image or <a href="#contrast">+contrast</a> to reduce the image
contrast.</p>

<p>For a more pronounced effect you can repeat the option:</p>

<pre><code>
convert rose: -contrast -contrast rose_c2.png
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="contrast-stretch"></a>-contrast-stretch <var>black-point</var><br />-contrast-stretch <var>black-point</var>{x<var>white-point</var>}{<var>%</var>}</h3>
</div>

<p class="magick-description">Increase the contrast in an image by <var>stretching</var> the range of intensity values.</p>

<p>While performing the stretch, black-out at most <var>black-point</var> pixels and white-out at most <var>white-point</var> pixels. Or, if percent is used, black-out at most
<var >black-point %</var> pixels and white-out at most <var>white-point %</var> pixels.</p>

<p>Prior to ImageMagick 6.4.7-0, <a href="#contrast-stretch"
>-contrast-stretch</a> will black-out at most <var>black-point</var> pixels and white-out at most <var >total pixels
minus white-point</var> pixels. Or, if percent is used, black-out at most <var>black-point %</var> pixels and white-out at most <var>100% minus white-point %</var> pixels.</p>

<p>Note that <code>-contrast-stretch 0</code> will modify the image such that
the image's min and max values are stretched to 0 and <var>QuantumRange</var>, respectively, without any loss of data due to burn-out or
clipping at either end. This is not the same as <a href="#normalize"
>-normalize</a>, which is equivalent to <code>-contrast-stretch 0.15x0.05%</code> (or
prior to ImageMagick 6.4.7-0, <code>-contrast-stretch 2%x99%</code>).</p>

<p>Internally operator works by creating a histogram bin, and then uses that
bin to modify the image. As such some colors may be merged together when they
originally fell into the same 'bin'. </p>

<p>All the channels are normalized in concert by the same amount so as to
preserve color integrity, when the default <a href="#channel" >+channel</a>
setting is in use.  Specifying any other <a href="#channel" >-channel</a>
setting will normalize the RGB channels independently.</p>

<p>See also  <a href="#auto-level" >-auto-level</a> for a 'perfect'
normalization of mathematical images. </p>

<p>This operator is under review for re-development. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="convolve"></a>-convolve <var>kernel</var></h3>
</div>

<p class="magick-description">Convolve an image with a user-supplied convolution kernel.</p>

<p>The <var>kernel</var> is a matrix specified as
a comma-separated list of integers (with no spaces), ordered left-to right,
starting with the top row. Presently, only odd-dimensioned kernels are
supported, and therefore the number of entries in the specified <var>kernel</var> must be 3<sup>2</sup>=9, 5<sup>2</sup>=25,
7<sup>2</sup>=49, etc. </p>

<p>Note that the <?php option("convolve"); ?> operator supports the <?php
option("bias"); ?> setting. This option shifts the convolution so that
positive and negative results are relative to a user-specified bias value.
This is important for non-HDRI compilations of ImageMagick when dealing with
convolutions that contain negative as well as positive values. This is
especially the case with convolutions involving high pass filters or edge
detection. Without an output bias, the negative values is clipped at zero.
</p>

<p>When using an ImageMagick with the HDRI compile-time setting, <?php
option("bias"); ?> is not needed, as ImageMagick is able to store/handle any
negative results without clipping to the color value range (0..QuantumRange).
See the discussion on HDRI implementations of ImageMagick on the page <a
href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">High
Dynamic-Range Images</a>. For more about HDRI go the ImageMagick <a
href="https://www.imagemagick.org/Usage/basics/#hdri">Usage</a> pages or this
<a href="http://en.wikipedia.org/wiki/High_dynamic_range_imaging">Wikipedia</a>
entry.  </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="copy"></a>-copy <var>geometry</var> <var>offset</var></h3>
</div>

<p class="magick-description">copy pixels from one area of an image to another.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="crop"></a>-crop <var>geometry</var>{<var>@</var>}{<var>!</var>}</h3>
</div>

<p class="magick-description">Cut out one or more rectangular regions of the image.</p>

<p><?php seeGeometry(); ?></p>

<p>The <var>width</var> and <var>height</var> of the <var>geometry</var> argument give the size of the image that remains
after cropping, and <var>x</var> and <var>y</var> in the
<var>offset</var> (if present) gives the location of the top left
corner of the cropped image with respect to the original image. To specify the
amount to be removed, use <a href="#shave">-shave</a> instead.</p>

<p>If the <var>x</var> and <var>y</var> offsets are
present, a single image is generated, consisting of the pixels from the
cropping region. The offsets specify the location of the upper left corner of
the cropping region measured downward and rightward with respect to the upper
left corner of the image. If the <a href="#gravity">-gravity</a> option is
present with <code>NorthEast</code>, <code>East</code>, or <code>SouthEast</code>
gravity, it gives the distance leftward from the right edge of the image to
the right edge of the cropping region. Similarly, if the <a
href="#gravity">-gravity</a> option is present with <code>SouthWest</code>,
<code>South</code>, or <code>SouthEast</code> gravity, the distance is measured
upward between the bottom edges.</p>

<p>If the <var>x</var> and <var>y</var> offsets are
omitted, a set of tiles of the specified geometry, covering the entire input
image, is generated. The rightmost tiles and the bottom tiles are smaller if
the specified geometry extends beyond the dimensions of the input image.</p>

<p>You can add the <var>@</var> to the geometry argument to equally divide the image into the number of tiles generated.</p>

<p>By adding a exclamation character flag to the geometry argument, the
cropped images virtual canvas page size and offset is set as if the
geometry argument was a viewport or window. This means the canvas page size
is set to exactly the same size you specified, the image offset set
relative top left corner of the region cropped. </p>

<p>If the cropped image 'missed' the actual image on its virtual canvas, a
special single pixel transparent 'missed' image is returned, and a 'crop
missed' warning given. </p>

<p>It might be necessary to <a href="#repage" >+repage</a> the image prior to
cropping the image to ensure the crop coordinate frame is relocated to the
upper-left corner of the visible image.

Similarly you may want to use <a href="#repage" >+repage</a> after cropping to
remove the page offset that will be left behind. This is especially true when
you are going to write to an image format such as PNG that supports an image
offset.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="cycle"></a>-cycle <var>amount</var></h3>
</div>

<p class="magick-description">displace image colormap by amount.</p>

<p><var>Amount</var> defines the number of positions each
colormap entry is shifted.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="debug"></a>-debug <var>events</var></h3>
</div>

<p class="magick-description">enable debug printout.</p>

<p>The <code>events</code> parameter specifies which events are to be logged. It
can be either <code>None</code>, <code>All</code>, <code>Trace</code>, or
a comma-separated list consisting of one or more of the following domains:
<code>Accelerate</code>, <code>Annotate</code>, <code>Blob</code>, <code>Cache</code>,
<code>Coder</code>, <code>Configure</code>, <code>Deprecate</code>,
<code>Exception</code>, <code>Locale</code>, <code>Render</code>,
<code>Resource</code>, <code>Security</code>, <code>TemporaryFile</code>,
<code>Transform</code>, <code>X11</code>, or <code>User</code>. </p>


<p>For example, to log cache and blob events, use.</p>

<pre><code>
convert -debug "Cache,Blob" rose: rose.png
</code></pre>

<p>The <code>User</code> domain is normally empty, but developers can log user
events in their private copy of ImageMagick.</p>

<p>To print the complete list of debug methods, use <a href="#list">-list
debug</a>.</p>

<p>Use the <a href="#log">-log</a> option to specify the format for debugging
output.</p>

<p>Use <a href="#debug">+debug</a> to turn off all logging.</p>

<p>Debugging may also be set using the <code>MAGICK_DEBUG</code> <a href="<?php
echo $_SESSION['RelativePath'] ?>/../script/resources.php#environment"
>environment variable</a>.  The allowed values for the <code>MAGICK_DEBUG</code>
environment variable are the same as for the <a href="#debug">-debug</a>
option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="decipher"></a>-decipher <var>filename</var></h3>
</div>

<p class="magick-description">Decipher and restore pixels that were previously transformed by <a href="#encipher">-encipher</a>.</p>

<p>Get the passphrase from the file specified by <var>filename</var>.</p>

<p>For more information, see the webpage, <a
href="https://www.imagemagick.org/www/cipher.html">ImageMagick: Encipher or
Decipher an Image</a>.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="deconstruct"></a>-deconstruct</h3>
</div>

<p class="magick-description">find areas that has changed between images </p>

<p>Given a sequence of images all the same size, such as produced by <a
href="#coalesce">-coalesce</a>, replace the second and later images, with
a smaller image of just the area that changed relative to the previous image.
</p>

<p>The resulting sequence of images can be used to optimize an animation
sequence, though will not work correctly for GIF animations when parts of the
animation can go from opaque to transparent. </p>

<p>This option is actually equivalent to the  <a href="#layers">-layers</a>
method '<code>compare-any</code>'. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="define"></a>-define <var>key</var>{<var>=value</var>}<var>...</var></h3>
</div>

<p class="magick-description">add specific global settings generally used to control coders and image processing operations.</p>

<p>This option creates one or more definitions for coders and decoders to use
while reading and writing image data.  Definitions are generally used to
control image file format coder modules, and image processing operations,
beyond what is provided by normal means.  Defined settings are listed in <a
href="#verbose" >-verbose</a> information ("<code>info:</code>" output format)
as "Artifacts". </p>

<p>If <var>value</var> is missing for a definition, an empty-valued
definition of a flag is created with that name. This used to control on/off
options.  Use <a href="#define">+define key</a> to remove definitions
previously created.  Use <a href="#define">+define "*"</a> to remove all
existing definitions.</p>

<p>The same 'artifact' settings can also be defined using the <a
href="#set" >-set "option:<var>key</var>" "<var>value</var>"</a> option, which also allows the use of <a href="<?php echo
$_SESSION['RelativePath']?>/../script/escape.php" >Format and Print Image
Properties</a> in the defined value. </p>

<p>The <var>option</var> and <var>key</var> are case-independent (they are
converted to lowercase for use within the decoders) while the <var>value</var>
is case-dependent.</p>

<p>Such settings are global in scope, and affect all images and operations. </p>

<p>The following definitions are just some of the artifacts that are
available:</p>

<table class="table table-sm table-striped">
  <tr>
    <td>bmp:alpha=<var>true|false</var></td>
    <td>include any alpha channel when writing in the BMP image format.</td>
  </tr>

  <tr>
    <td>bmp:format=<var>value</var></td>
    <td> valid values are <var>bmp2</var>, <var>bmp3</var>,
   and <var>bmp4</var>.  This option can be useful when the
   method of prepending "BMP2:" to the output filename is inconvenient or
   is not available, such as when using the <?php cmd("mogrify"); ?>
   utility.</td>
  </tr>

  <tr>
    <td>colorspace:auto-grayscale=<var>on|off</var></td>
    <td>prevent automatic conversion to grayscale inside coders that support
    grayscale. This should be accompanied by -type truecolor. PNG and TIF do
    not need this define. With PNG, just use PNG24:image. With TIF, just use
    -type truecolor. JPG and PSD will need this define.</td>
  </tr>

  <tr>
    <td>complex:snr=<var>value</var></td>
    <td>Set the divide SNR constant<a href="#complex">-complex</a></td>
  </tr>

  <tr>
    <td>compose:args=<var>arguments</var></td>
     <td>Sets certain compose argument values when using convert ... -compose ...
    -composite. See <a href="https://www.imagemagick.org/script/compose.php"
    >Image Composition</a></td>
  </tr>

  <tr>
    <td>compose:clamp=<var>on|off</var></td>
    <td>set each pixel whose value is below zero to zero and any the pixel
    whose value is above the quantum range to the quantum range (e.g. 65535)
    otherwise the pixel value remains unchanged.  Define supported in
    ImageMagick 6.9.1-3 and above.</td>
  </tr>

  <tr>
    <td>connected-components:area-threshold=<var>value</var></td>
    <td>Merges any region with area smaller than <var>value</var> into its surrounding region or largest neighbor.</td>
  </tr>

  <tr>
    <td>connected-components:keep=<var>list-of-ids</var></td>
    <td>Comma and/or hyphenated list of id values to keep in the output. 
    Supported in Imagemagick 6.9.3-0.</td>
  </tr>

  <tr>
    <td>connected-components:mean-color=<var>true</var></td>
    <td>Changes the output image from id values to mean color values. Supported 
    in Imagemagick 6.9.2-8.</td>
  </tr>

  <tr>
    <td>connected-components:remove=<var>list-of-ids</var></td>
    <td>Comma and/or hyphenated list of id values to remove from the output.
     Supported in Imagemagick 6.9.2-9.</td>
  </tr>

  <tr>
    <td>connected-components:verbose=<var>true</var></td>
    <td>Lists id, bounding box, centroid, area, mean color for each region.</td>
  </tr>

  <tr>
    <td>convolve:scale=<var>{kernel_scale}[!^] [,{origin_addition}] [%]</var></td>
     <td>Defines the kernel scaling. The special flag ! automatically scales to 
    full dynamic range. The ! flag can be used in combination with a factor or 
    percent. The factor or percent is then applied after the automatic scaling. 
    An example is 50%!. This produces a result 50% darker than full dynamic 
    range scaling. The ^ flag assures the kernel is 'zero-summing', for 
    example when some values are positive and some are negative as in edge 
    detection kernels. The origin addition adds that value to the center 
    pixel of the kernel. This produces and effect that is like adding the image 	
    that many times to the result of the filtered image. The typical value 
    is 1 so that the original image is added to the result of the convolution. 
    The default is 0.</td>
  </tr>

  <tr>
    <td>convolve:showkernel=<var>1</var></td>
     <td>Outputs (to 'standard error') all the information about a specified <a
    href="#morphology" >-morphology convolve</a> kernel.</td>
  </tr>

  <tr>
    <td>dcm:display-range=<var>reset</var></td>
     <td>Sets the display range to the minimum and maximum pixel values for the
    DCM image format.</td>
  </tr>

  <tr>
    <td>dds:cluster-fit=<var>true|false</var></td>
     <td>Enables the dds cluster-fit.</td>
  </tr>

  <tr>
    <td>dds:compression=<var>dxt1|dxt5|none</var></td>
     <td>Sets the dds compression.</td>
  </tr>

  <tr>
    <td>dds:mipmaps=<var>value</var></td>
     <td>Sets the dds number of mipmaps.</td>
  </tr>

  <tr>
     <td>dds:weight-by-alpha=<var>true|false</var></td>
     <td>Enables the dds alpha weighting.</td>
  </tr>

  <tr>
    <td>deskew:auto-crop=<var>true</var></td>
    <td>auto crop the image after deskewing.</td>
  </tr>

  <tr>
    <td>delegate:bimodal=<var>true</var></td>
     <td>Specifies direct conversion from Postscript to PDF.</td>
  </tr>

  <tr>
    <td>distort:scale=<var>value</var></td>
    <td>Sets the output scaling factor for use with <a href="#distort"
   >-distort</a></td>
  </tr>

  <tr>
    <td>distort:viewport=<var>WxH+X+Y</var></td>
    <td>Sets the viewport for use with <a href="#distort">-distort</a></td>
  </tr>

  <tr>
    <td>dot:layout-engine=<var>value</var></td>
     <td>Specifies the layout engine for the DOT image format (e.g.
    <code>neato</code>).</td>
  </tr>

  <tr>
    <td>exr:color-type=<var>value</var></td>
     <td>Specifies the color type for the EXR format: RGB, RGBA, YC, YCA, Y, YA, R, G, B, A).</td>
  </tr>

  <tr>
    <td>filter:option=<var>value</var></td>
     <td>Set a filter option for use with <a href="#resize">-resize</a>.
    See <a href="#filter">-filter</a> for details.</td>
  </tr>

  <tr>
    <td>fourier:normalize=<var>inverse</var></td>
    <td>Sets the location for the FFT/IFT normalization as use by 
    <a href="#fft">+-fft</a> and <a href="#ift">+-ift</a>. The default is 
    <var>forward</var>.</td>
  </tr>

  <tr>
    <td>h:format=<var>value</var></td>
     <td>Set the image encoding format use when writing a C-style header.
         <var>format</var> can be any output format supported by ImageMagick
         except for <var>h</var> and <var>magick</var>.  If this
         option is omitted, the default is <var>GIF</var> for PseudoClass
         images and <var>PNM</var> for DirectClass images.
    </td>
  </tr>

  <tr>
    <td>icon:auto-resize</td>
     <td>Automatically stores multiple sizes when writing an ico image
    (requires a 256x256 input image).</td>
  </tr>

  <tr>
    <td>identify:locate=<var>minimum|maximum</var></td>
     <td>Locates the coordinates of one or more image minimum or maximum</td>
  </tr>

  <tr>
    <td>identify:limit=<var>number</var></td>
     <td>Locates the coordinates for the number of minima or maxima specified</td>
  </tr>

  <tr>
    <td>jp2:layer-number=<var>value</var></td>
     <td>Sets the maximum number of quality layers to decode. Same for JPT, JC2,
    and J2K</td>
  </tr>

  <tr>
    <td>jp2:number-resolutions=<var>value</var></td>
     <td>Sets the number of resolutions to encode.Same for JPT, JC2, and 
     J2K</td>
  </tr>

  <tr>
    <td>jp2:progression-order=<var>value</var></td>
     <td>choose from LRCP, RLCP, RPCL, PCRL or CPRL. Same for JPT, JC2, and 
    J2K</td>
  </tr>

  <tr>
    <td>jp2:quality=<var>value,value...</var></td>
     <td>Sets the quality layer PSNR, given in dB. The order is from left to 
    right in ascending order. The default is a single lossless quality layer.  
    Same for JPT, JC2, and J2K</td>
  </tr>

  <tr>
    <td>jp2:rate=<var>value</var></td>
     <td>Specify the compression factor to use while writing JPEG-2000 files. 
     The compression factor is the reciprocal of the compression ratio. The 
     valid range is 0.0 to 1.0, with 1.0 indicating lossless compression. If 
     defined, this value overrides the -quality setting.  A quality setting 
     of 75 results in a rate value of 0.06641. Same for JPT, JC2, and J2K</td>
  </tr>

  <tr>
    <td>jp2:reduce-factor=<var>value</var></td>
     <td>Sets the number of highest resolution levels to be discarded.Same for 
    JPT, JC2, and J2K</td>
  </tr>

  <tr>
    <td>jpeg:block-smoothing=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:colors=<var>value</var></td>
     <td>Set the desired number of colors and let the JPEG encoder do the
    quantizing.</td>
  </tr>

  <tr>
    <td>jpeg:dct-method=<var>value</var></td>
     <td>Choose from <code>default</code>, <code>fastest</code>, 
    <code>float</code>, <code>ifast</code>, and <code>islow</code>.</td>
  </tr>

  <tr>
    <td>jpeg:extent=<var>value</var></td>
     <td>Restrict the maximum JPEG file size, for example <code>-define
    jpeg:extent=400KB</code>.  The JPEG encoder will search for the highest
    compression quality level that results in an output file that does not
    exceed the value. The <code>-quality</code> option also will be respected 
    starting with version 6.9.2-5. Between 6.9.1-0 and 6.9.2-4, add -quality 
    100 in order for the jpeg:extent to work properly. Prior to 6.9.1-0, the 
    -quality setting was ignored.</td>
  </tr>

  <tr>
    <td>jpeg:fancy-upsampling=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:optimize-coding=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:q-table=<var>table</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:sampling-factor=<var>sampling-factor-string</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:size=<var>geometry</var></td>
     <td>Set the size hint of a JPEG image, for
    example, <code>-define jpeg:size=128x128</code>.
    It is most useful for increasing performance and reducing the memory
    requirements when reducing the size of a large JPEG image.</td>
  </tr>

  <tr>
    <td>json:features</td>
   <td>includes features in verbose information</td>
  </tr>

  <tr>
    <td>json:limit</td>
    <td> </td>
  </tr>

  <tr>
    <td>json:locate</td>
    <td> </td>
  </tr>

  <tr>
    <td>json:moments</td>
   <td>includes image moments in verbose information</td>
  </tr>

  <tr>
    <td>magick:format=<var>value</var></td>
     <td>Set the image encoding format use when writing a C-style header.
         This is the same as "h:format=format" described above.</td>
  </tr>

  <tr>
    <td>mng:need-cacheoff</td>
   <td>turn playback caching off for streaming MNG.</td>
  </tr>

  <tr>
    <td>morphology:compose=<var>compose-method</var></td>
     <td>Specifies how to merge results generated by multiple<a
    href="#morphology" >-morphology</a> kernel. The default is none. One 
    typical value is 'lighten' as used, for example, with the sobel edge 
    kernels. </td>
  </tr>

  <tr>
    <td>morphology:showkernel=<var>1</var></td>
     <td>Outputs (to 'standard error') all the information about a generated <a
    href="#morphology" >-morphology</a> kernel.</td>
  </tr>

  <tr>
    <td>pcl:fit-to-page=<var>true</var></td>
  </tr>

  <tr>
    <td>pdf:fit-page=<var>geometry</var></td>
     <td> geometry specifies the scaling dimensions for resizing when the PDF is
    being read. The geometry is either WxH{%} or page size. No offsets are
    allowed. (introduced in IM 6.8.8-8)</td>
  </tr>

  <tr>
    <td>pdf:fit-to-page=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:use-cropbox=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:use-trimbox=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:stop-on-error=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:pdf:page-direction=<var>right-to-left</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>phash:colorspaces=<var>colorspace,colorspace,...</var></td>
    <td>the perceptual hash defaults to the sRGB and HCLp colorspaces.  When 
    using this define, you can specify up to six alternative colorspaces. (as 
    of IM 7.0.3-8)</td>
  </tr>

  <tr>
    <td>phash:normalize=<var>true</var></td>
    <td>normalizes the phash metric by dividing by the number of channels 
    specified by <code>-define phash:colorspaces</code> when using compare 
    -metric phash. (as of IM 7.0.3-8)</td>
  </tr>

  <tr>
    <td>png:bit-depth=<var>value</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>png:color-type=<var>value</var></td>
     <td>desired bit-depth and color-type for PNG output.  You can force the PNG
    encoder to use a different bit-depth and color-type than it would have
    normally selected, but only if this does not cause any loss of image
    quality. Any attempt to reduce image quality is treated as an error and no
    PNG file is written.  E.g., if you have a 1-bit black-and-white image, you
    can use these "defines" to cause it to be written as an 8-bit grayscale,
    indexed, or even a 64-bit RGBA.  But if you have a 16-million color image,
    you cannot force it to be written as a grayscale or indexed PNG.  If you
    wish to do this, you must use the appropriate <a href="#depth">-depth</a>,
    <a href="#colors">-colors</a>, or <a href="#type">-type</a> directives to
    reduce the image quality prior to using the PNG encoder. Note that in
    indexed PNG files, "bit-depth" refers to the number of bits per index,
    which can be 1, 2, 4, or 8.  In such files, the color samples always have
    8-bit depth.</td>
  </tr>

  <tr>
    <td>png:compression-filter=<var>value</var></td>
    <td> valid values are 0 through 9. 0-4 are the corresponding PNG filters,
   5 means adaptive filtering except for images with a colormap, 6 means
   adaptive filtering for all images, 7 means MNG "loco" compression, 8 means 
   Z_RLE strategy with adaptive filtering, and 9 means Z_RLE strategy with no 
   filtering.</td>
  </tr>

  <tr>
    <td>png:compression-level=<var>value</var></td>
    <td> valid values are 0 through 9, with 0 providing the least but fastest
       compression and 9 usually providing the best and always the slowest.</td>
  </tr>

  <tr>
    <td>png:compression-strategy=<var>value</var></td>
    <td> valid values are 0 through 4, meaning default, filtered, huffman_only,
   rle, and fixed ZLIB compression strategy. If you are using an old zlib
   that does not support Z_RLE (before 1.2.0) or Z_FIXED (before 1.2.2.2),
   values 3 and 4, respectively, will use the zlib default strategy
   instead.</td>
  </tr>

  <tr>
    <td>png:format=<var>value</var></td>
    <td> valid values are <var>png8</var>, <var>png24</var>,
   <var>png32</var>, <var>png48</var>,
   <var>png64</var>, and <var>png00</var>.
   This property can be useful for specifying
   the specific PNG format to be used, when the usual method of prepending the
   format name to the output filename is inconvenient, such as when writing
   a PNG-encoded ICO file or when using <?php cmd("mogrify"); ?>.
   Value = <var>png8</var> reduces the number of colors to 256,
   only one of which may be fully transparent, if necessary.  The other
   values do not force any reduction of quality; it is an error to request
   a format that cannot represent the image data without loss (except that
   it is allowed to reduce the bit-depth from 16 to 8 for all formats).
   Value = <var>png24</var> and <var>png48</var>
   allow transparency, only if a single color is fully transparent and that
   color does not also appear in an opaque pixel; such transparency is
   written in a PNG <code>tRNS</code> chunk.
   Value = <var>png00</var> causes the image to inherit its
   color-type and bit-depth from the input image, if the input was also
   a PNG.</td>
  </tr>

  <tr>
    <td>png:exclude-chunk=<var>value</var></td>

  <tr>
    <td>png:include-chunk=<var>value</var></td>
     <td>ancillary chunks to be excluded from or included in PNG output.

    <p>The <var>value</var> can be the name of a PNG chunk-type such
    as <var>bKGD</var>, a comma-separated list of chunk-names
    (which can include the word <var>date</var>, the word
    <var>all</var>, or the word <var>none</var>).
    Although PNG chunk-names are case-dependent, you can use all lowercase
    names if you prefer.</p>

    <p>The "include-chunk" and "exclude-chunk" lists only affect the behavior
    of the PNG encoder and have no effect on the PNG decoder.</p>

    <p>As a special case, if the <code>sRGB</code> chunk is excluded and
    the <code>gAMA</code> chunk is included, the <code>gAMA</code> chunk will
    only be written if gamma is not 1/2.2, since most decoders assume
    sRGB and gamma=1/2.2 when no colorspace information is included in
    the PNG file.  Because the list is processed from left to right, you
    can achieve this with a single define:</p>

<pre><code>
-define png:include-chunk=none,gAMA
</code></pre>

    <p>As a special case, if the <code>sRGB</code> chunk is not excluded and
    the PNG encoder recognizes that the image contains the sRGB ICC profile,
    the PNG encoder will write the <code>sRGB</code> chunk instead of the
    entire ICC profile.  To force the PNG encoder to write the sRGB
    profile as an <code>iCCP</code> chunk in the output PNG instead of the
    <code>sRGB</code> chunk, exclude the <code>sRGB</code> chunk.</p>

    <p>The critical PNG chunks <code>IHDR</code>, <code>PLTE</code>,
    <code>IDAT</code>, and <code>IEND</code> cannot be excluded.  Any such
    entries appearing in the list will be ignored.</p>

    <p>If the ancillary PNG <code>tRNS</code> chunk is excluded and the
    image has transparency, the PNG colortype is forced to be 4 or 6
    (GRAY_ALPHA or RGBA).  If the image is not transparent, then the
    <code>tRNS</code> chunk isn't written anyhow, and there is no effect
    on the PNG colortype of the output image.</p>

    <p>The <a href="#strip">-strip</a> option does the equivalent of the
    following for PNG output:</p>

<pre><code>
-define png:exclude-chunk=EXIF,iCCP,iTXt,sRGB,tEXt,zCCP,zTXt,date
</code></pre>

    <p>The default behavior is to include all known PNG ancillary chunks
    plus ImageMagick's private <code>vpAg</code> ("virtual page") chunk,
    and to exclude all PNG chunks that are unknown to ImageMagick,
    regardless of their PNG "copy-safe" status as described in the
    PNG specification.</p>

    <p>Any chunk names that are not known to ImageMagick are ignored
    if they appear in either the "include-chunk" or "exclude-chunk" list.
    The ancillary chunks currently known to ImageMagick are
    <code>bKGD</code>, <code>cHRM</code>, <code>gAMA</code>, <code>iCCP</code>,
    <code>oFFs</code>, <code>pHYs</code>, <code>sRGB</code>, <code>tEXt</code>,
    <code>tRNS</code>, <code>vpAg</code>, and <code>zTXt</code>.</p>

    <p>You can also put <code>date</code> in the list to include or exclude
    the "Date:create" and "Date:modify" text chunks that ImageMagick normally
    inserts in the output PNG.</p></td>
  </tr>

  <tr>
    <td>png:preserve-colormap[=<var>true</var>]</td>
     <td>Use the existing image->colormap. Normally the PNG encoder will
    try to optimize the palette, eliminating unused entries and putting
    the transparent colors first.  If this flag is set, that behavior
    is suppressed.</td>
  </tr>

  <tr>
    <td>png:preserve-iCCP[=<var>true</var>]</td>
     <td>By default, the PNG decoder and encoder examine any ICC profile
    that is present, either from an <code>iCCP</code> chunk in the PNG
    input or supplied via an option, and if the profile is recognized
    to be the sRGB profile, converts it to the <code>sRGB</code> chunk.
    You can use <code>-define png:preserve-iCCP</code> to prevent
    this from happening; in such cases the <code>iCCP</code> chunk
    will be read or written and no <code>sRGB</code> chunk will be
    written.  There are some ICC profiles that claim to be sRGB but
    have various errors that cause them to be rejected by libpng16; such
    profiles are recognized anyhow and converted to the <code>sRGB</code>
    chunk, but are rejected if the <code>-define png:preserve-iCCP</code>
    is present. Note that not all "sRGB" ICC profiles are recognized
    yet; we will add them to the list as we encounter them.</td>
  </tr>

  <tr>
    <td>png:swap-bytes[=<var>true</var>]</td>
     <td>The PNG specification requires that any multi-byte integers be stored in
    network byte order (MSB-LSB endian).  This option allows you to
    fix any invalid PNG files that have 16-bit samples stored incorrectly
    in little-endian order (LSB-MSB).  The "-define png:swap-bytes" option
    must appear before the input filename on the commandline.  The swapping
    is done during the libpng decoding operation.</td>
  </tr>

  <tr>
    <td>profile:skip=<var>name1,name2,...</var></td>
     <td>Skip the named profile[s] when reading the image. Use skip="*" to
    skip all named profiles in the image. Many named profiles exist,
    including ICC, EXIF, APP1, IPTC, XMP, and others.</td>
  </tr>

  <tr>
    <td>ps:imagemask</td>
     <td>If the ps:imagemask flag is defined, the PS3 and EPS3 coders will 
    create Postscript files that render bilevel images with the Postscript 
    imagemask operator instead of the image operator.</td>
  </tr>

  <tr>
    <td>psd:additional-info=all|selective</td>
     <td>This option should only be used when converting from a PSD file to 
     another PSD file. This should be placed after the image is read. The two
     options are 'all' and 'selective'. The 'selective' option will preserve 
     all additional information that is not related to the geometry of the 
     image. The 'all' option should only be used when the geometry of the 
     image has not been changed. This option is helpful when transferring 
     non-simple layers, such as adjustment layers from the input PSD file to 
     the output PSD file. If this option is not used, the additional 
     information will not be preserved. This define is available as of 
     Imagemagick version 6.9.5-8.
</td>
  </tr>

  <tr>
    <td>psd:alpha-unblend=off</td>
     <td>Disables new automatic un-blending of transparency with the base image 
     for the flattened layer 0 before adding the alpha channel to the output  
     image. This define must be placed before the input psd image. (Available 
     as of IM 6.9.2.5). The automatic un-blending is new to IM 6.9.2.5 and 
     prevents the transparency from being applied twice in the output 
     image. This option should be set before reading the image.</td>
  </tr>

  <tr>
    <td>psd:preserve-opacity-mask=true</td>
     <td>This option should only be used when converting from a PSD file to 
     another PSD file. It will preserve the opacity mask of a layer and add it 
     back to the layer when the image is saved. Setting this to 'true' will 
     enable this feature. This define is available as of Imagemagick version 
     6.9.5-10.
</td>
  </tr>

  <tr>
    <td>preserve-timestamp=<var>{True, False}</var></td>
     <td>Preserve file timestamp (<code>mogrify</code> only).</td>
  </tr>

  <tr>
    <td>quantum:format=<var>type</var></td>
     <td>Set the type to <code>floating-point</code> to specify a floating-point
    format for raw files (e.g. GRAY:) or for MIFF and TIFF images in HDRI mode
    to preserve negative values. If <a href="#depth">-depth</a> 16 is
    included, the result is a single precision floating point format.
    If <a href="#depth">-depth</a> 32 is included, the result is
    double precision floating point format.</td>
  </tr>

  <tr>
    <td>quantum:polarity=<var>photometric-interpretation</var></td>
     <td>Set the photometric-interpretation of an image (typically for TIFF 
     image file format) to either <code>min-is-black</code> (default) or
    <code>min-is-white</code>.</td>
  </tr>

  <tr>
    <td>sample:offset=<var>geometry</var></td>
     <td>Location of the sampling point within the sub-region being sampled,
    expressed as percentages (see <a href="#sample" >-sample</a>).</td>
  </tr>

  <tr>
    <td>showkernel=<var>1</var></td>
     <td>Outputs (to 'standard error') all the information about a generated <a
    href="#morphology" >-morphology</a> kernel.</td>
  </tr>

  <tr>
    <td>stream:buffer-size=<var>value</var></td>
   <td>Set the stream buffer size.  Select 0 for unbuffered I/O.</td>
  </tr>

  <tr>
    <td>tiff:alpha=<var>associated|unassociated|unspecified</var></td>
    <td>Specify the alpha extra samples as associated, unassociated or 
    unspecified </td>
  </tr>

  <tr>
    <td>tiff:endian=<var>msb|lsb</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>tiff:exif-properties=<var>true</var></td>
    <td>Enables reading the EXIF properties.</td>
  </tr>

  <tr>
    <td>tiff:fill-order=<var>msb|lsb</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>tiff:ignore-layers=<var>true</var></td>
    <td>Ignores the photoshop layers.</td>
  </tr>

  <tr>
    <td>tiff:ignore-tags=<var>comma-separate-list-of-tag-IDs</var></td>
    <td>Allows one or more tag ID values to be ignored.</td>
  </tr>

  <tr>
    <td>tiff:rows-per-strip=<var>value</var></td>
    <td>Sets the number of rows per strip</td>
  </tr>

  <tr>
    <td>tiff:tile-geometry=<var>WxH</var></td>
    <td>Sets the tile size for pyramid tiffs. Requires the suffix
        PTIF: before the outputname</td>
  </tr>

  <tr>
    <td>type:features=<var>string</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>type:hinting=<var>off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>txt:compliance=<var>css</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>x:screen=<var>true</var></td>
    <td>Obtains the image from the root window </td>
  </tr>

  <tr>
    <td>x:silent=<var>true</var></td>
    <td>Turns off the beep when importing an image </td>
  </tr>
</table>

<p>For example, to create a postscript file that will render only the black
pixels of a bilevel image, use:</p>

<pre><code>
convert bilevel.tif -define ps:imagemask eps3:stencil.ps
</code></pre>

<p>Set attributes of the image registry by prefixing the value with
<code>registry:</code>.  For example, to set a temporary path to put work files,
use:</p>

<pre><code>
-define registry:temporary-path=/data/tmp
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="delay"></a>-delay <var>ticks</var> <br />-delay <var>ticks</var>x<var>ticks-per-second</var> {<var>&lt;</var>} {<var>&gt;</var>}</h3>
</div>

<p class="magick-description">display the next image after pausing.</p>

<p>This option is useful for regulating the animation of image sequences
<var>ticks/ticks-per-second</var> seconds must expire before the display of the
next image. The default is no delay between each showing of the image
sequence.  The default ticks-per-second is 100.</p>

<p>Use <code>&gt;</code> to change the image delay <var>only</var> if its current
value exceeds the given delay. <code>&lt;</code> changes the image delay
<var>only</var> if current value is less than the given delay.  For example, if
you specify <code>30&gt;</code> and the image delay is 20, the image delay does
not change. However, if the image delay is 40 or 50, the delay it is changed
to 30. Enclose the given delay in quotation marks to prevent the
<code>&lt;</code> or <code>&gt;</code> from being interpreted by your shell as
a file redirection.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="delete"></a>-delete <var>indexes</var></h3>
</div>

<p class="magick-description">delete the images specified by index, from the image sequence.</p>

<p>Specify the image by its index in the sequence.  The first image is index
0.  Negative indexes are relative to the end of the sequence, for example, -1
represents the last image of the sequence.  Specify a range of images with
a dash (e.g. 0-4).  Separate indexes with a comma (e.g. 0,2).  Use
<code>+delete</code> to delete the last image in the current image sequence. Use <code>-delete 0--1</code> to delete the entire image sequence.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="density"></a>-density <var>width</var><br />-density <var>width</var>x<var>height</var></h3>
</div>

<p class="magick-description">Set the horizontal and vertical resolution of an image for rendering to devices.</p>

<p>This option specifies the image resolution to store while encoding a raster
image or the canvas resolution while rendering (reading) vector formats such
as Postscript, PDF, WMF, and SVG into a raster image. Image resolution
provides the unit of measure to apply when rendering to an output device or
raster image. The default unit of measure is in dots per inch (DPI). The <a
href="#units">-units</a> option may be used to select dots per centimeter
instead.</p>

<p>The default resolution is 72 dots per inch, which is equivalent to one
point per pixel (Macintosh and Postscript standard). Computer screens are
normally 72 or 96 dots per inch, while printers typically support 150, 300,
600, or 1200 dots per inch. To determine the resolution of your display, use
a ruler to measure the width of your screen in inches, and divide by the
number of horizontal pixels (1024 on a 1024x768 display).</p>

<p>If the file format supports it, this option may be used to update the
stored image resolution. Note that Photoshop stores and obtains image
resolution from a proprietary embedded profile. If this profile is not
stripped from the image, then Photoshop will continue to treat the image using
its former resolution, ignoring the image resolution specified in the standard
file header.</p>

<p>The <a href="#density">-density</a> option sets an <var>attribute</var> and
does not alter the underlying raster image. It may be used to adjust the
rendered size for desktop publishing purposes by adjusting the scale applied
to the pixels. To resize the image so that it is the same size at a different
resolution, use the <a href="#resample">-resample</a> option.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="depth"></a>-depth <var>value</var></h3>
</div>

<p class="magick-description">depth of the image.</p>

<p>This the number of bits in a color sample within a pixel.  Use this option
to specify the depth of raw images whose depth is unknown such as GRAY, RGB,
or CMYK, or to change the depth of any image after it has been read.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="descend"></a>-descend</h3>
</div>

<p class="magick-description">obtain image by descending window hierarchy.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="deskew"></a>-deskew <var>threshold{%}</var></h3>
</div>

<p class="magick-description">straighten an image.  A threshold of 40% works for most images.</p>

<p>Use <a href="#set">-set</a> <code>option:deskew:auto-crop
<var>true | false</var></code> to auto crop the image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="despeckle"></a>-despeckle</h3>
</div>

<p class="magick-description">reduce the speckles within an image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="direction"></a>-direction <var>type</var></h3>
</div>

<p class="magick-description">render text right-to-left or left-to-right.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="displace"></a>-displace <var>horizontal-scale</var>{%}{!}<br />-displace <var>horizontal-scale</var>x<var>vertical-scale</var>{%}{!}</h3>
</div>

<p class="magick-description">shift image pixels as defined by a displacement map.</p>

<p>With this option, the 'overlay' image, and optionally the 'mask' image,
is used as a displacement map, which is used to displace the lookup of
what part of the 'background' image is seen at each point of the overlaid
area.  Much like the displacement map is a 'lens' that redirects light shining
through it so as to present a distorted view the original 'background' image
behind it. </p>

<p>Any perfect grey areas of the displacement map produce a zero
displacement of the image. Black areas produce the given maximum negative
displacement of the lookup point, while white produce a maximum positive
displacement of the lookup. </p>

<p>Note that it is the lookup of the 'background' that is displaced, not a
displacement of the image itself. As such an area of the displacement map
containing 'white' will have the lookup point 'shifted' by a positive amount,
and thus generating a copy of the destination image to the right/downward from
the correct position.  That is the image will look like it may have been
'shifted' in a negative left/upward direction.  Understanding this is a very
important in understanding how displacement maps work.  </p>

<p>The given arguments define the maximum amount of displacement in pixels
that a particular map can produce. If the displacement scale is large enough
it is also possible to lookup parts of the 'background' image that lie well
outside the bounds of the displacement map itself.  That is you could very
easily copy a section of the original image from outside the overlay area
into the overlay area. </p>

<p>The '%' flag makes the displacement scale relative to the size of the
overlay image (100% = half width/height of image). Using '!' switches
percentage arguments to refer to the destination image size instead.
these flags were added as of IM v6.5.3-5.</p>

<p>Normally a single grayscale displacement map is provided, which with the
given scaling values will determine a single direction (vector) in which
displacements can occur (positively or negatively).  However, if you also
specify a third image which is normally used as a <var>mask</var>,
the <var>composite image</var> is used for horizontal X
displacement, while the <var>mask image</var> is used for vertical Y
displacement.  This allows you to define completely different displacement
values for the X and Y directions, and allowing you to lookup any point within
the  <var>scale</var> bounds.  In other words each pixel can lookup
any other nearby pixel, producing complex 2 dimensional displacements, rather
than a simple 1 dimensional vector displacements. </p>

<p>Alternatively rather than supplying two separate images, as of IM v6.4.4-0,
you can use the 'red' channel of the overlay image to specify the horizontal
or X displacement, and the 'green' channel for the vertical or Y displacement.
</p>

<p>As of IM v6.5.3-5 any alpha channel in the overlay image is used as a
mask the transparency of the destination image. However areas outside the
overlaid areas will not be effected. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="display"></a>-display <var>host:display[.screen]</var></h3>
</div>

<p class="magick-description">Specifies the X server to contact.</p>

<p>This option is used with convert for obtaining image or font from this
X server. See <var>X(1)</var>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="dispose"></a>-dispose <var>method</var></h3>
</div>

<p class="magick-description">define the GIF disposal image setting for images that are being created or read in. </p>

<p>The layer disposal method defines the way each the displayed image is to be
modified after the current 'frame' of an animation has finished being
displayed (after its 'delay' period), but before the next frame on an
animation is to be overlaid onto the display. </p>

<p>Here are the valid methods:</p>

<dl class="row">
<dt class="col-md-4">Undefined</dt><dd class="col-md-8">0:  No disposal specified (equivalent to '<code>none</code>').</dd>
<dt class="col-md-4">None</dt><dd class="col-md-8">1:  Do not dispose, just overlay next frame image.</dd>
<dt class="col-md-4">Background</dt><dd class="col-md-8">2:  Clear the frame area with the background color.</dd>
<dt class="col-md-4">Previous</dt><dd class="col-md-8">3:  Clear to the image prior to this frames overlay.</dd>
</dl>

<p>You can also use the numbers given above, which is what the GIF format
uses internally to represent the above settings. </p>

<p>To print a complete list of dispose methods, use <a href="#list">-list dispose</a>.</p>

<p>Use <a href="#dispose" >+dispose</a>, turn off the setting and prevent
resetting the layer disposal methods of images being read in. </p>

<p>Use <a href="#set">-set</a> '<code>dispose</code>' method to set the image
disposal method for images already in memory.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="dissimilarity-threshold"></a>-dissimilarity-threshold <var>value</var></h3>
</div>

<p class="magick-description">maximum RMSE for subimage match (default 0.2).</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="dissolve"></a>-dissolve <var>src_percent</var>[x<var>dst_percent</var>]</h3>
</div>

<p class="magick-description">dissolve an image into another by the given percent.</p>

<p>The opacity of the composite image is multiplied by the given percent, then
it is composited 'over' the main image.  If <var>src_percent</var>
is greater than 100, start dissolving the main image so it becomes
transparent at a value of '<code>200</code>'.  If both percentages
are given, each image are dissolved to the percentages given. </p>

<p>Note that dissolve percentages do not add, two opaque images dissolved
'50,50', produce a 75% transparency. For a 50% + 50% blending of the two
images, you would need to use dissolve values of '50,100'.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="distort"></a>-distort <var>method arguments</var></h3>
</div>

<p class="magick-description">distort an image, using the given <var>method</var> and its required <var>arguments</var>.</p>

<p>The <var>arguments</var> is a single string containing a list
of floating point numbers separated by commas or spaces.  The number of
and meaning of the floating point values depends on the distortion <var>method</var> being used. </p>

<p>Choose from these distortion types:</p>

<table class="table table-sm table-striped">
  <tr>
    <th style="width: 8%">Method</th>
    <th>Description</th>
  </tr>

  <tr>
    <td>ScaleRotateTranslate <br/> SRT</td>
    <td>
       Distort image by first scaling and rotating about a given 'center',
       before translating that 'center' to the new location, in that order. It
       is an alternative method of specifying a 'Affine' type of
       distortion, but without shearing effects.  It also provides a good way
       of rotating and displacing a smaller image for tiling onto a larger
       background (IE 2-dimensional animations). <br/>

       The number of arguments determine the specific meaning of each
       argument for the scales, rotation, and translation operations. <br/>

       <dl class="row">
       <dt class="col-md-4">2:</dt><dd class="col-md-8"><var>Scale   Angle</var></dd>
       <dt class="col-md-4">3:</dt><dd class="col-md-8"><var>X,Y     Angle</var></dd>
       <dt class="col-md-4">4:</dt><dd class="col-md-8"><var>X,Y   Scale   Angle</var></dd>
       <dt class="col-md-4">5:</dt> <dd class="col-md-8"><var>X,Y   ScaleX,ScaleY   Angle</var></dd>
       <dt class="col-md-4">6:</dt> <dd class="col-md-8"><var>X,Y   Scale   Angle   NewX,NewY</var></dd>
       <dt class="col-md-4">7:</dt> <dd class="col-md-8"><var>X,Y   ScaleX,ScaleY   Angle NewX,NewY</var></dd>
       </dl>

       This is actually an alternative way of specifying a 2 dimensional linear
       'Affine' or 'AffineProjection' distortion.  </td> </tr>

  <tr>
    <td>Affine</td>
    <td>
       Distort the image linearly by moving a list of at least 3 or more sets
       of control points (as defined below).  Ideally 3 sets or 12 floating
       point values are given allowing the image to be linearly scaled,
       rotated, sheared, and translated, according to those three points. See
       also the related 'AffineProjection' and 'SRT'
       distortions. <br/>

       More than 3 sets given control point pairs (12 numbers) is least
       squares fitted to best match a linear affine distortion. If only 2
       control point pairs (8 numbers) are given a two point image translation
       rotation and scaling is performed, without any possible  shearing,
       flipping or changes in aspect ratio to the resulting image. If only one
       control point pair is provides the image is only translated, (which may
       be a floating point non-integer translation). <br/>

       This distortion does not include any form of perspective distortion.
       </td>

  </tr>

  <tr>
    <td>AffineProjection</td>
    <td>
       Linearly distort an image using the given Affine Matrix of 6
       pre-calculated coefficients forming a set of Affine Equations to map
       the source image to the destination image.

       <p class="text-center"><var>
       s<sub>x</sub>, r<sub>x</sub>,
       r<sub>y</sub>, s<sub>y</sub>,
       t<sub>x</sub>, t<sub>y</sub>
       </var></p>

       See <a href="#affine" >-affine</a> setting for more detail, and
       meanings of these coefficients. <br/>

       The distortions 'Affine' and 'SRT' provide
       alternative methods of defining this distortion, with ImageMagick doing
       the calculations needed to generate the required coefficients. You can
       see the internally generated coefficients, by using a <a
       href="#verbose" >-verbose</a> setting with those other variants.  </td>

  </tr>

  <tr>
    <td>BilinearForward<br/>
    BilinearReverse</td>
    <td>
       Bilinear Distortion, given a minimum of 4 sets of coordinate pairs, or
       16 values (see below). Not that lines may not appear straight after
       distortion, though the distance between coordinates will remain
       consistent. <br/>

       The 'BilinearForward' is used to map rectangles to any
       quadrilateral, while the 'BilinearReverse' form maps any
       quadrilateral to a rectangle, while preserving the straight line edges
       in each case.  <br/>

       Note that 'BilinearForward' can generate invalid pixels
       which will be colored using the <a href="#mattecolor" >-mattecolor</a>
       color setting.  Also if the quadrilateral becomes 'flipped' the image
       may disappear. <br/>

       There are future plans to produce a true Bilinear distortion that will
       attempt to map any quadrilateral to any other quadrilateral, while
       preserving edges (and edge distance ratios).

       </td>
  </tr>

  <tr>
    <td>Perspective</td>
    <td>
       Perspective distort the images, using a list of 4 or more sets of
       control points (as defined below).  More that 4 sets (16 numbers) of
       control points provide least squares fitting for more accurate
       distortions (for the purposes of image registration and panorama
       effects).  Less than 4 sets will fall back to a 'Affine'
       linear distortion.  <br/>

       Perspective Distorted images ensures that straight lines remain
       straight, but the scale of the distorted image will vary. The horizon
       is anti-aliased, and the 'sky' color may be set using the
       <a href="#mattecolor" >-mattecolor</a> setting. </td>
  </tr>

  <tr>
    <td>PerspectiveProjection  </td>
    <td>
       Do a 'Perspective' distortion biased on a set of 8
       pre-calculated coefficients. You can get these coefficients by looking
       at the <a href="#verbose" >-verbose</a> output of a
       'Perspective' distortion, or by calculating them yourself.
       If the last two perspective scaling coefficients are zero, the
       remaining 6 represents a transposed 'Affine Matrix'. </td>

  </tr>

  <tr>
    <td>Arc</td>
    <td>
       Arc the image (variation of polar mapping) over the angle given around
       a circle.

       <dl class="row">
       <dt class="col-md-4">arc_angle</dt>
           <dd class="col-md-8">The angle over which to arc the image side-to-side</dd>
       <dt class="col-md-4">rotate_angle</dt>
           <dd class="col-md-8">Angle to rotate resulting image from vertical center</dd>
       <dt class="col-md-4">top_radius</dt>
           <dd class="col-md-8">Set top edge of source image at this radius</dd>
       <dt class="col-md-4">bottom_radius </dt>
           <dd class="col-md-8">Set bottom edge to this radius (radial scaling)</dd>
       </dl>

       The resulting image is always resized to best fit the resulting image,
       (as if using <a href="#distort" >+distort</a>) while attempting to
       preserve scale and aspect ratio of the original image as much as
       possible with the arguments given by the user. All four arguments will
       be needed to change the overall aspect ratio of an 'Arc'ed image. <br/>

       This a variation of a polar distortion designed to try to preserve the
       aspect ratio of the image rather than direct Cartesian to Polar
       conversion. </td>
  </tr>

  <tr>
    <td>Polar</td>
    <td>
       Like 'Arc' but do a complete Cartesian to Polar mapping of
       the image. that is the height of the input image is mapped to the
       radius limits, while the width is wrapped around between the
       angle limits. <br/>

       Arguments: <var>Rmax,Rmin CenterX,CenterY, start,end_angle</var> <br/>

       All arguments are optional. With <var>Rmin</var> defaulting to zero, the
       center to the center of the image, and the angles going from -180 (top)
       to +180 (top).  If <var>Rmax</var> is given the special value of
       '0', the the distance from the center to the nearest edge
       is used for the radius of the output image, which will ensure the whole
       image is visible (though scaled smaller).  However a special value of
       '-1' will use the distance from the center to the furthest
       corner,  This may 'clip' the corners from the input rectangular image,
       but will generate the exact reverse of a 'DePolar' with
       the same arguments. <br/>

       If the plus form of distort (<a href="#distort" >+distort</a>) is used
       output image center will default to 0,0 of the virtual
       canvas, and the image size adjusted to ensure the whole input image is
       made visible in the output image on the virtual canvas. </td>

  </tr>

  <tr>
    <td>DePolar</td>
    <td>
       Uses the same arguments and meanings as a 'Polar' distortion
       but generates the reverse Polar to Cartesian distortion. <br/>

       The special <var>Rmax</var> setting of '0' may however clip
       the corners of the input image.  However using the special
       <var>Rmax</var> setting of '-1' (maximum center to corner
       distance) will ensure the whole distorted image is preserved in the
       generated result, so that the same argument to 'Polar' will
       reverse the distortion re-producing the original.

       Note that as this distortion requires the area resampling of a circular
       arc, which can not be handled by the builtin EWA resampling function.
       As such the normal EWA filters are turned off. It is recommended some
       form of 'super-sampling' image processing technique be used to produce
       a high quality result. </td>

  </tr>

  <tr>
    <td>Barrel</td>
    <td>
       Given the four coefficients (A,B,C,D) as defined by <a
       href="http://wiki.panotools.org/Lens_correction_model" >Helmut
       Dersch</a>, perform a barrel or pin-cushion distortion appropriate to
       correct radial lens distortions.  That is in photographs, make straight
       lines straight again. <br/>

       <p class="text-center">Arguments: <var>A   B   C</var>   [ <var>D</var>   [
       <var>X</var> , <var>Y</var> ] ] <br/>
       or <var>A<sub>x</sub> B<sub>x</sub> C<sub>x</sub> D<sub>x</sub>  
       A<sub>y</sub> B<sub>y</sub> C<sub>y</sub> D<sub>y</sub></var>  
       [ <var>X</var> , <var>Y</var> ] </p>
       So that it forms the function
       <p class="text-center">Rsrc = r * ( <var>A</var>*r<sup>3</sup> + <var>B</var>*r<sup>2</sup> +
                               <var>C</var>*r + <var>D</var> )</p>

       Where <var>X</var>,<var>Y</var> is the optional center of the distortion
       (defaulting to the center of the image). <br/>
       The second form is typically used to distort images, rather than
       correct lens distortions. <br/>
       </td>

  </tr>

  <tr>
    <td>BarrelInverse</td>
    <td>
       This is very similar to 'Barrel' with the same set of
       arguments, and argument handling.  However it uses the inverse
       of the radial polynomial,
       so that it forms the function
       <p class="text-center">Rsrc = r / ( <var>A</var>*r<sup>3</sup> + <var>B</var>*r<sup>2</sup> +
                               <var>C</var>*r + <var>D</var> )</p>
       Note that this is not the reverse of the 'Barrel'
       distortion, just a different barrel-like radial distortion method.

       </td>
  </tr>

  <tr>
    <td>Shepards</td>
    <td>
       Distort the given list control points (any number) using an Inverse
       Squared Distance Interpolation Method (<a
       href="http://en.wikipedia.org/wiki/Shepard%27s_method" >Shepards
       Method</a>). The control points in effect do 'localized' displacement
       of the image around the given control point (preserving the look and
       the rotation of the area near the control points.  For best results
       extra control points should be added to 'lock' the positions of the
       corners, edges and other unchanging parts of the image, to prevent
       their movement. <br/>

       The distortion has been likened to 'taffy pulling' using nails, or
       pins' stuck in a block of 'jelly' which is then moved to the new
       position, distorting the surface of the jelly. <br/>

       Internally it is equivalent to generating a displacement map (see <a
       href="#displace" >-displace</a>) for source image color look-up using
       the <a href="#sparse-color" >-sparse-color</a> method of the same name.

       </td>
  </tr>

</table>

<p>To print a complete list of distortion methods, use <a href="#list">-list
distort</a>.</p>

<p>Many of the above distortion methods such as '<code>Affine</code>',
'<code>Perspective</code>', and '<code>Shepards</code>' use a list control points
defining how these points in the given image should be distorted in the
destination image. Each set of four floating point values represent a source
image coordinate, followed immediately by the destination image coordinate.
This produces a list of values such as...</p>
<p class="text-center"><var>
      U<sub>1</sub>,V<sub>1</sub> X<sub>1</sub>,Y<sub>1</sub>  
      U<sub>2</sub>,V<sub>2</sub> X<sub>2</sub>,Y<sub>2</sub>  
      U<sub>3</sub>,V<sub>3</sub> X<sub>3</sub>,Y<sub>3</sub>  
      ...  
      U<sub>n</sub>,V<sub>n</sub> X<sub>n</sub>,Y<sub>n</sub>  
</var></p>
<p>where <var>U,V</var> on the source image is mapped to <var>X,Y</var> on the
destination image. </p>

<p>For example, to warp an image using '<code>perspective</code>' distortion,
needs a list of at least 4 sets of coordinates, or 16 numbers.  Here is the
perspective distortion of the built-in "rose:" image. Note how spaces were
used to group the 4 sets of coordinate pairs, to make it easier to read and
understand.</p>

<pre><code>
convert rose:  -virtual-pixel black \
  -distort Perspective '0,0,0,0  0,45,0,45  69,0,60,10  69,45,60,35' \
   rose_3d_rotated.gif"
</code></pre>

<p>If more that the required number of coordinate pairs are given for
a distortion, the distortion method is 'least squares' fitted to produce the
best result for all the coordinate pairs given. If less than the ideal number
of points are given, the distort will generally fall back to a simpler form of
distortion that can handles the smaller number of coordinates (usually a linear
'<code>Affine</code>' distortion). </p>

<p>By using more coordinates you can make use of image registration tool to
find matching coordinate pairs in overlapping images, so as to improve the
'fit' of the distortion. Of course a bad coordinate pair can also make the
'fit' worse. Caution is always advised. </p>

<p>Colors are acquired from the source image according to a cylindrical
resampling <a href="#filter" >-filter</a>, using a special technique known as
EWA resampling. This produces very high quality results, especially when
images become smaller (minified) in the output, which is very common when
using '<code>perspective</code>' distortion. For example here we view
a infinitely tiled 'plane' all the way to the horizon. </p>

<pre><code>
convert -size 90x90 pattern:checkerboard -normalize -virtual-pixel tile \
  -distort perspective  '0,0,5,45  89,0,45,46  0,89,0,89  89,89,89,89' \
   checks_tiled.jpg
</code></pre>

<p>Note that a infinitely tiled perspective images involving the horizon can
be very slow, because of the number of pixels that are compressed to generate
each individual pixel close to the 'horizon'.  You can turn off EWA
resampling, by specifying the special <a href="#filter" >-filter</a> setting of
'<code>point</code>' (recommended if you plan to use super-sampling instead).
</p>

<p>If an image generates <i>invalid pixels</i>, such as the 'sky' in the last
example, <a href="#distort" >-distort</a> will use the current <a
href="#mattecolor" >-mattecolor</a> setting for these pixels. If you do not
what these pixels to be visible, set the color to match the rest of the
ground. </p>

<p>The output image size will by default be the same as the input image.  This
means that if the part of the distorted image falls outside the viewed area of
the 'distorted space', those parts is clipped and lost.  However if you use
the plus form of the operator (<a href="#distort" >+distort</a>) the operator
will attempt (if possible) to show the whole of the distorted image, while
retaining a correct 'virtual canvas' offset, for image layering. This offset
may need to be removed using <a href="#repage" >+repage</a>, to remove if it
is unwanted. </p>

<p>Setting <a href="#verbose" >-verbose</a> setting, will cause <a
href="#distort" >-distort</a> to attempt to output the internal coefficients,
and the <a href="#fx" >-fx</a> equivalent to the distortion, for expert study,
and debugging purposes. This many not be available for all distorts. </p>

<p>You can alternatively specify a special "<code><a href="#define"
>-define</a> distort:viewport={geometry_string}</code>" setting which will
specify the size and the offset of the generated 'viewport' image of the
distorted image space.</p>

<p>Setting a "<code><a href="#define" >-define</a>
distort:scale=<var>scale_factor</var></code>" will scale the output image (viewport or
otherwise) by that factor without changing the viewed contents of the
distorted image. This can be used either for 'super-sampling' the image for
a higher quality result, or for panning and zooming around the image (with
appropriate viewport changes, or post-distort cropping and resizing). </p>

<p>Setting "<code><a href="#define" >-define</a> resample:verbose=1</code>"
will output the cylindrical filter lookup table created by the EWA (Elliptical
Weighted Average) resampling algorithm. Note this table uses a squared radius
lookup value. This is typically only used for debugging EWA resampling. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="distribute-cache"></a>-distribute-cache <var>port</var></h3>
</div>

<p class="magick-description">launch a distributed pixel cache server. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="dither"></a>-dither <var>method</var></h3>
</div>

<p class="magick-description">Apply a Riemersma or Floyd-Steinberg error diffusion dither to
images when general color reduction is applied via an option, or automagically
when saving to specific formats. This enabled by default.</p>

<p>Dithering places two or more colors in neighboring pixels so that to the
eye a closer approximation of the images original color is reproduced. This
reduces the number of colors needed to reproduce the image but at the cost of
a lower level pattern of colors. Error diffusion dithers can use any set of
colors (generated or user defined) to an image.  </p>

<p>Dithering is turned on by default, to turn it off use the plus form of the
setting, <a href="#dither">+dither</a>. This will also also render PostScript
without text or graphic aliasing. Disabling dithering often (but not always)
leads to faster process, a smaller number of colors, but more cartoon like
image coloring.  Generally resulting in 'color banding' effects in areas with
color gradients. </p>

<p>The color reduction operators <a href="#colors">-colors</a>, <a
href="#monochrome">-monochrome</a>, <a href="#remap ">-remap</a>, and <a
href="#posterize">-posterize</a>, apply dithering to images using the reduced
color set they created. These operators are also used as part of automatic
color reduction when saving images to formats with limited color support, such
as <code>GIF:</code>, <code>XBM:</code>, and others, so dithering may also be used
in these cases. </p>

<p>Alternatively you can use <a href="#random-threshold">-random-threshold</a>
to generate purely random dither. Or use <a
href="#ordered-dither">-ordered-dither</a> to apply threshold mapped dither
patterns, using uniform color maps, rather than specific color maps. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="draw"></a>-draw <var>string</var></h3>
</div>

<p class="magick-description">Annotate an image with one or more graphic primitives.</p>

<p>Use this option to annotate or decorate an image with one or more graphic
primitives. The primitives include shapes, text, transformations, and pixel
operations.</p>

<p>The shape primitives:</p>

<dl class="row">
<dt class="col-md-4">point</dt><dd class="col-md-8">          x,y</dd>
<dt class="col-md-4">line</dt><dd class="col-md-8">           x0,y0 x1,y1</dd>
<dt class="col-md-4">rectangle</dt><dd class="col-md-8">      x0,y0 x1,y1</dd>
<dt class="col-md-4">roundRectangle</dt><dd class="col-md-8"> x0,y0 x1,y1 wc,hc</dd>
<dt class="col-md-4">arc</dt><dd class="col-md-8">            x0,y0 x1,y1 a0,a1</dd>
<dt class="col-md-4">ellipse</dt><dd class="col-md-8">        x0,y0 rx,ry a0,a1</dd>
<dt class="col-md-4">circle</dt><dd class="col-md-8">         x0,y0 x1,y1</dd>
<dt class="col-md-4">polyline</dt><dd class="col-md-8">       x0,y0  ...  xn,yn</dd>
<dt class="col-md-4">polygon</dt><dd class="col-md-8">        x0,y0  ...  xn,yn</dd>
<dt class="col-md-4">bezier</dt><dd class="col-md-8">         x0,y0  ...  xn,yn</dd>
<dt class="col-md-4">path</dt><dd class="col-md-8">specification  </dd>
<dt class="col-md-4">image</dt><dd class="col-md-8">          operator x0,y0 w,h filename</dd>
</dl>

<p>The text primitive:</p>

<dl class="row">
<dt class="col-md-4">text</dt><dd class="col-md-8">x0,y0 string</dd>
</dl>
<p>The text gravity primitive:</p>

<dl class="row">
<dt class="col-md-4">gravity</dt><dd class="col-md-8">NorthWest, North, NorthEast, West, Center, East, SouthWest, South, or SouthEast</dd>
</dl>

<p>The text gravity primitive only affects the placement of text and does not
interact with the other primitives.  It is equivalent to using the <a
href="#gravity">-gravity</a> command-line option, except that it is limited in
scope to the <a href="#draw">-draw</a> option in which it appears.</p>

<p>The transformation primitives:</p>

<dl class="row">
<dt class="col-md-4">rotate</dt><dd class="col-md-8">degrees</dd>
<dt class="col-md-4">translate</dt><dd class="col-md-8">dx,dy</dd>
<dt class="col-md-4">scale</dt><dd class="col-md-8">sx,sy</dd>
<dt class="col-md-4">skewX</dt><dd class="col-md-8">degrees</dd>
<dt class="col-md-4">skewY</dt><dd class="col-md-8">degrees</dd>
</dl>

<p>The pixel operation primitives:</p>

<dl class="row">
<dt class="col-md-4">color</dt><dd class="col-md-8">x0,y0 method</dd>
<dt class="col-md-4">matte</dt><dd class="col-md-8">x0,y0 method</dd>
</dl>

<p>The shape primitives are drawn in the color specified by the preceding <a
href="#fill">-fill</a> setting.  For unfilled shapes, use <a
href="#fill">-fill none</a>.  You can optionally control the stroke (the
"outline" of a shape) with the <a href="#stroke">-stroke</a> and <a
href="#strokewidth">-strokewidth</a> settings.</p>

<p>A <code>point</code> primitive is specified by a single <var>point</var> in the
pixel plane, that is, by an ordered pair of integer coordinates,
<var>x</var>,<var>y</var>. (As it involves only a single pixel, a <code>point</code>
primitive is not affected by <a href="#stroke">-stroke</a> or <a
href="#strokewidth">-strokewidth</a>.)</p>

<p>A <code>line</code> primitive requires a start point and end point.</p>

<p>A <code>rectangle</code> primitive is specified by the pair of points at the
upper left and lower right corners.</p>

<p>A <code>roundRectangle</code> primitive takes the same corner points as
a <code>rectangle</code> followed by the width and height of the rounded corners
to be removed.</p>

<p>The <code>circle</code> primitive makes a disk (filled) or circle (unfilled).
Give the center and any point on the perimeter (boundary).</p>

<p>The <code>arc</code> primitive is used to inscribe an elliptical segment in
to a given rectangle. An <code>arc</code> requires the two corners used for
<code>rectangle</code> (see above) followed by the start and end angles of the
arc of the segment segment (e.g. 130,30 200,100 45,90). The start and end
points produced are then joined with a line segment and the resulting segment
of an ellipse is filled.</p>

<p>Use <code>ellipse</code> to draw a partial (or whole) ellipse. Give the
center point, the horizontal and vertical "radii" (the <var>semi-axes</var> of
the ellipse) and start and end angles in degrees (e.g. 100,100 100,150
0,360).</p>

<p>The <code>polyline</code> and <code>polygon</code> primitives require three or
more points to define their perimeters. A <code>polyline</code> is simply
a <code>polygon</code> in which the final point is not stroked to the start
point. When unfilled, this is a <var>polygonal line</var>. If the <a
href="#stroke">-stroke</a> setting is <code>none</code> (the default), then
a <code>polyline</code> is identical to a <code>polygon</code>.  </p>

<p>A <var>coordinate</var> is a pair of integers separated by a space or
optional comma. </p>

<p>As an example, to define a circle centered at 100,100 that extends to
150,150 use:</p>

<pre><code>
-draw 'circle 100,100 150,150'
</code></pre>

<p>The <code>Bezier</code> primitive creates a spline curve and requires three
or points to define its shape. The first and last points are the
<var>knots</var> and these points are attained by the curve, while any
intermediate coordinates are <var>control points</var>. If two control points
are specified, the line between each end knot and its sequentially respective
control point determines the tangent direction of the curve at that end. If
one control point is specified, the lines from the end knots to the one
control point determines the tangent directions of the curve at each end. If
more than two control points are specified, then the additional control points
act in combination to determine the intermediate shape of the curve. In order
to draw complex curves, it is highly recommended either to use the
<code>path</code> primitive or to draw multiple four-point bezier segments with
the start and end knots of each successive segment repeated. For example:</p>

<pre><code>
-draw 'bezier 20,50 45,100 45,0 70,50'
-draw 'bezier 70,50 95,100 95,0 120,50'
</code></pre>

<p>A <code>path</code> represents an outline of an object, defined in terms of
moveto (set a new current point), lineto (draw a straight line), curveto (draw
a Bezier curve), arc (elliptical or circular arc) and closepath (close the
current shape by drawing a line to the last moveto) elements. Compound paths
(i.e., a path with subpaths, each consisting of a single moveto followed by
one or more line or curve operations) are possible to allow effects such as
<var>donut holes</var> in objects. (See <a
href="http://www.w3.org/TR/SVG/paths.html">Paths</a>.)</p>

<p>Use <code>image</code> to composite an image with another image. Follow the
image keyword with the composite operator, image location, image size, and
filename:</p>

<pre><code>
-draw 'image SrcOver 100,100 225,225 image.jpg'
</code></pre>

<p>You can use 0,0 for the image size, which means to use the actual
dimensions found in the image header. Otherwise, it is scaled to the given
dimensions. See <a href="<?php echo
$_SESSION['RelativePath']?>/../script/compose.php">Alpha Compositing</a> for
a detailed discussion of alpha composition methods that are available. </p>

<p>The "special augmented compose operators" such as "dissolve" that require
arguments cannot be used at present with the <code>-draw image</code> option.
 </p>

<p>Use <code>text</code> to annotate an image with text. Follow the text
coordinates with a string. If the string has embedded spaces, enclose it in
single or double quotes.</p>

<p>For example, the following annotates the image with <code>Works like
magick!</code> for an image titled <code>bird.miff</code>. </p>

<pre><code>
-draw "text 100,100 'Works like magick!' "
</code></pre>

<p>See the <a href="#annotate">-annotate</a> option for another convenient way
to annotate an image with text.</p>

<p>The <code>rotate</code> primitive rotates subsequent shape primitives and
text primitives about the origin of the main image. If the <a
href="#region">-region</a> option precedes the <a href="#draw">-draw</a>
option, the origin for transformations is the upper left corner of the
region.</p>

<p>The <code>translate</code> primitive translates subsequent shape and text
primitives.</p>

<p>The <code>scale</code> primitive scales them.</p>

<p>The <code>skewX</code> and <code>skewY</code> primitives skew them with respect
to the origin of the main image or the region.</p>

<p>The transformations modify the current affine matrix, which is initialized
from the initial affine matrix defined by the <a href="#affine">-affine</a>
option. Transformations are cumulative within the <a href="#draw">-draw</a>
option. The initial affine matrix is not affected; that matrix is only changed
by the appearance of another <a href="#affine">-affine</a> option. If another
<a href="#draw">-draw</a> option appears, the current affine matrix is
reinitialized from the initial affine matrix.</p>

<p>Use the <code>color</code> primitive to change the color of a pixel to the
fill color (see <a href="#fill">-fill</a>). Follow the pixel coordinate with
a method:</p>

<pre><code>
point
replace
floodfill
filltoborder
reset
</code></pre>

<p>Consider the target pixel as that specified by your coordinate. The
<code>point</code> method recolors the target pixel. The <code>replace</code>
method recolors any pixel that matches the color of the target pixel.
<code>Floodfill</code> recolors any pixel that matches the color of the target
pixel and is a neighbor, whereas <code>filltoborder</code> recolors any neighbor
pixel that is not the border color. Finally, <code>reset</code> recolors all
pixels.</p>

<p>Use <code>matte</code> to the change the pixel matte value to transparent.
Follow the pixel coordinate with a method (see the <code>color</code> primitive
for a description of methods). The <code>point</code> method changes the matte
value of the target pixel. The <code>replace</code> method changes the matte
value of any pixel that matches the color of the target pixel.
<code>Floodfill</code> changes the matte value of any pixel that matches the
color of the target pixel and is a neighbor, whereas <code>filltoborder</code>
changes the matte value of any neighbor pixel that is not the border color (<a
href="#bordercolor">-bordercolor</a>). Finally <code>reset</code> changes the
matte value of all pixels.</p>

<p>You can set the primitive color, font, and font bounding box color with <a
href="#fill">-fill</a>, <a href="#font">-font</a>, and <a href="#box">-box</a>
respectively.  Options are processed in command line order so be sure to use
these options <var>before</var> the <a href="#draw">-draw</a> option.</p>

<p>Strings that begin with a number must be quoted (e.g. use '1.png' rather
than 1.png).</p>

<p>Drawing primitives conform to the <a href="<?php echo
$_SESSION['RelativePath'] ?>/../script/magick-vector-graphics.php" >Magick
Vector Graphics</a> format.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="duplicate"></a>-duplicate <var>count,indexes</var></h3>
</div>

<p class="magick-description">duplicate an image one or more times.</p>

<p>Specify the count and the image to duplicate by its index in the sequence.
The first image is index 0.  Negative indexes are relative to the end of the
sequence, for example, -1 represents the last image of the sequence.  Specify
a range of images with a dash (e.g. 0-4).  Separate indexes with a comma (e.g.
0,2).  Use <code>+duplicate</code> to duplicate the last image in the current
image sequence.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="edge"></a>-edge <var>radius</var></h3>
</div>

<p class="magick-description">detect edges within an image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="emboss"></a>-emboss <var>radius</var></h3>
</div>

<p class="magick-description">emboss an image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="encipher"></a>-encipher <var>filename</var></h3>
</div>

<p class="magick-description">Encipher pixels for later deciphering by <a href="#decipher">-decipher</a>.</p>

<p>Get the passphrase from the file specified by <var>filename</var>.</p>

<p>For more information, see the webpage, <a
href="https://www.imagemagick.org/www/cipher.html">ImageMagick: Encipher or
Decipher an Image</a>.</p>



<div style="margin: auto;">
  <h3 class="magick-header"><a id="encoding"></a>-encoding <var>type</var></h3>
</div>

<p class="magick-description">specify the text encoding.</p>

<p>Choose from</p>

<pre><code>
AdobeCustom     AdobeExpert
AdobeStandard   AppleRoman
BIG5            GB2312
Latin 2         None
SJIScode        Symbol
Unicode         Wansung
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="endian"></a>-endian <var>type</var></h3>
</div>

<p class="magick-description">Specify endianness (<code>MSB</code> or <code>LSB</code>) of the image.</p>

<p>To print a complete list of endian types, use the <a href="#list">-list endian</a> option.</p>

<p>Use <a href="#endian">+endian</a> to revert to unspecified endianness.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="enhance"></a>-enhance</h3>
</div>

<p class="magick-description">Apply a digital filter to enhance a noisy image.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="equalize"></a>-equalize</h3>
</div>

<p class="magick-description">perform histogram equalization on the image channel-by-channel.</p>

<p>To perform histogram equalization on all channels in concert, transform the
image into some other color space, such as HSL, OHTA, YIQ or YUV, then
equalize the appropriate intensity-like channel, then convert back to RGB.</p>

<p>For example using HSL, we have: ... <code>-colorspace HSL -channel lightness
-equalize -colorspace RGB</code> ...</p>

<p>For YIQ, YUV and OHTA use the red channel. For example, OHTA is a principal
components transformation that puts most of the information in the first
channel. Here we have ... <code>-colorspace OHTA -channel red -equalize
-colorspace RGB</code> ...</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="evaluate"></a>-evaluate <var>operator value</var></h3>
</div>

<p class="magick-description">Alter channel pixels by evaluating an arithmetic, relational, or logical expression.</p>

<p>(See the <a href="#function" >-function</a> operator for some
multi-parameter functions. See the <a href="#fx" >-fx</a> operator if more
elaborate calculations are needed.)</p>

<p>The behaviors of each <var>operator</var> are summarized in the
following list. For brevity, the numerical value of a "pixel" referred to
below is the value of the corresponding channel of that pixel, while
a "normalized pixel" is that number divided by the maximum
(installation-dependent) value <var>QuantumRange</var>. (If
normalized pixels are used, they are restored, following the other
calculations, to the full range by multiplying by <var>QuantumRange</var>.)</p>

<table class="table table-sm table-striped">
  <col width="25%" />
  <col width="75%" />
  <thead>
  <tr>
  <th><var>operator</var></th>
  <th>Summary (see further below for details)</th>
  </tr>
  </thead>
  <tbody>

    <tr><td>Abs </td>             <td>Add <var>value</var> to pixels and return absolute value. </td></tr>
    <tr><td>Add </td>             <td>Add <var>value</var> to pixels. </td></tr>
    <tr><td>AddModulus </td>      <td>Add <var>value</var> to pixels modulo <var>QuantumRange</var>.</td></tr>
    <tr><td>And  </td>            <td>Binary AND of pixels with <var>value</var>.</td></tr>
    <tr><td>Cos, Cosine </td>             <td>Apply cosine to pixels with frequency <var>value</var> with 50% bias added.</td></tr>
    <tr><td>Divide  </td>         <td>Divide pixels by <var>value</var>.</td></tr>
    <tr><td>Exp  </td>            <td>base-e exponential function</td></tr>
    <tr><td>Exponential  </td>            <td>base-e exponential function</td></tr>
    <tr><td>LeftShift </td>       <td>Shift the pixel values left by <var>value</var> bits (i.e., multiply pixels by 2<sup><var>value</var></sup>).</td></tr>
    <tr><td>Log  </td>            <td>Apply scaled logarithm to normalized pixels.</td></tr>
    <tr><td>Max  </td>            <td>Set pixels to maximum of <var>value</var> and current pixel <var>value</var> (i.e. set any pixels currently less than <var>value</var> to <var>value</var>).</td></tr>
    <tr><td>Mean  </td>            <td>Add the <var>value</var> and divide by 2.</td></tr>
    <tr><td>Median  </td>          <td>Choose the median value from an image sequence.</td></tr>
    <tr><td>Min  </td>            <td>Set pixels to minimum of <var>value</var> and current pixel <var>value</var> (i.e. set any pixels currently greater than <var>value</var> to <var>value</var>).</td></tr>
    <tr><td>Multiply </td>        <td>Multiply pixels by <var>value</var>.</td></tr>
    <tr><td>Or  </td>             <td>Binary OR of pixels with <var>value</var>.</td></tr>
    <tr><td>Pow </td>             <td>Raise normalized pixels to the power <var>value</var>.</td></tr>
    <tr><td>RightShift </td>      <td>Shift the pixel values right by <var>value</var> bits (i.e., divide pixels by 2<sup><var>value</var></sup>).</td></tr>
    <tr><td>RMS</td>            <td>Square the pixel and add the <var>value</var>.</td></tr>
    <tr><td>RootMeanSquare</td>            <td>Square the pixel and add the <var>value</var>.</td></tr>
    <tr><td>Set </td>             <td>Set pixel equal to <var>value</var>.</td></tr>
    <tr><td>Sin, Sine </td>             <td>Apply sine to pixels with frequency <var>value</var> with 50% bias added.</td></tr>
    <tr><td>Subtract </td>        <td>Subtract <var>value</var> from pixels.</td></tr>
    <tr><td>Xor </td>             <td>Binary XOR of pixels with <var>value.</var></td></tr>

    <tr><td> </td><td> </td></tr>

   <tr><td>Gaussian-noise</td><td> </td></tr>
   <tr><td>Impulse-noise</td><td> </td></tr>
   <tr><td>Laplacian-noise</td><td> </td></tr>
   <tr><td>Multiplicative-noise</td>      <td>(These are equivalent to the corresponding <a href="#noise" >-noise</a> operators.)</td></tr>
   <tr><td>PoissonNoise</td><td> </td></tr>
   <tr><td>Uniform-noise</td><td> </td></tr>

    <tr><td> </td><td> </td></tr>

   <tr><td>Threshold </td>       <td>Threshold pixels larger than <var>value</var>.</td></tr>
   <tr><td>ThresholdBlack </td>  <td>Threshold pixels to zero values equal to or below <var>value</var>.</td></tr>
   <tr><td>ThresholdWhite </td>  <td>Threshold pixels to maximum values above <var>value</var>.  </td></tr>
 </tbody>
 </table>

<p>The specified functions are applied only to each previously set <a
href="#channel" >-channel</a> in the image. If necessary, the results of the
calculations are truncated (clipped) to fit in the interval [0, <var>QuantumRange</var>].  The transparency channel of the image is
represented as a 'alpha' values (0 = fully transparent), so, for example, a
<code>Divide</code> by 2 of the alpha channel will make the image
semi-transparent.  Append the percent symbol '<code>%</code>' to specify a value
as a percentage of the <var>QuantumRange</var>.</p>

<p>To print a complete list of <a href="#evaluate">-evaluate</a> operators, use
<a href="#list">-list evaluate</a>.</p>

<p>The results of the <code>Add</code>, <code>Subtract</code> and
<code>Multiply</code> methods can also be achieved using either the <a
href="#level" >-level</a> or the <a href="#level" >+level</a> operator, with
appropriate argument, to linearly modify the overall range of color values.
Please note, however, that <a href="#level" >-level</a> treats transparency as
'matte' values (0 = opaque), while <a href="#level" >-evaluate</a> works with
'alpha' values.</p>

<p><code>AddModulus</code> has been added as of ImageMagick 6.4.8-4 and provides
addition modulo the <var>QuantumRange</var>. It is therefore
equivalent to <code>Add</code> unless the resulting pixel value is outside the
interval [0, <var>QuantumRange</var>]. </p>

<p><code>Exp or Exponential</code> has been added as of ImageMagick 6.6.5-1 and
works on normalized pixel values. The <var>value</var> used with
<code>Exp</code> should be negative so as to produce a decaying exponential
function. Non-negative values will always produce results larger unity and
thus outside the interval [0, <var>QuantumRange</var>]. The
formula is expressed below. </p>

<p class="text-center">
exp(<var>value</var> × <b><var>u</var></b>)
</p>

<p> If the input image is squared, for example, using <a href="#-function"
>-function polynomial "2 0 0"</a>, then a decaying Gaussian function will be
the result.</p>

<p><code>Log</code> has been added as of ImageMagick 6.4.2-1 and works on
normalized pixel values. This a <var>scaled</var> log function. The <var>value</var> used with <code>Log</code> provides a <var>scaling
factor</var> that adjusts the curvature in the graph of the log function. The
formula applied to a normalized value <b><var>u</var></b> is below. </p>

<p class="text-center">
log(<var>value</var> × <b><var>u</var></b> + 1) / log(<var>value</var> + 1)
</p>

<p><code>Pow</code> has been added as of ImageMagick 6.4.1-9, and works on
normalized pixel values. Note that <code>Pow</code> is related to the <a
href="#gamma" >-gamma</a> operator. For example, <b>-gamma 2</b> is equivalent
to <b>-evaluate pow 0.5</b>, i.e., a 'square root' function. The value used
with <a href="#gamma" >-gamma</a> is simply the reciprocal of the value used
with <code>Pow</code>.</p>

<p><code>Cosine</code> and <code>Sine</code> was added as of IM v6.4.8-8 and
converts the image values into a value according to a (co)sine wave function.
The  synonyms <code>Cos</code> and <code>Sin</code> may also be used.  The output
is biased 50% and normalized by 50% so as to fit in the respective color value
range.  The <var>value</var> scaling of the <var>period</var> of the
function (its frequency), and thus determines the number of 'waves' that will
be generated over the input color range.  For example, if the <var>value</var> is 1, the effective period is simply the <var>QuantumRange</var>; but if the <var>value</var> is 2,
then the effective period is the <var>half</var> the <var>QuantumRange</var>.</p>

<p class="text-center">
0.5 + 0.5 × cos(2 π <b><var>u</var></b> × <var>value</var>).
</p>

<p>See also the <a href="#function" >-function</a> operator, which is a
multi-value version of evaluate. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="evaluate-sequence"></a>-evaluate-sequence <var>operator</var></h3>
</div>

<p class="magick-description">Alter channel pixels by evaluating an arithmetic, relational, or
logical expression over a sequence of images.</p>

<p>To print a complete list of <a
href="#evaluate-sequence">-evaluate-sequence</a> operators, use <a
href="#list">-list evaluate</a>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="extent"></a>-extent <var>geometry</var></h3>
</div>

<p class="magick-description">Set the image size and offset.</p>

<p>If the image is enlarged, unfilled areas are set to the background color.
To position the image, use offsets in the <var>geometry</var>
specification or precede with a <a href="#gravity">-gravity</a> setting.  To
specify how to compose the image with the background, use <a href="#compose"
>-compose</a>.</p>

<p>This command reduces or expands a JPEG image to fit on an 800x600
display.  If the aspect ratio of the input image isn't exactly 4:3, then the
image is centered on an 800x600 black canvas: </p>

<pre><code>
convert input.jpg -resize 800x600 -background black -compose Copy \ 
  -gravity center -extent 800x600 -quality 92 output.jpg
</code></pre>

<p><?php seeGeometry(); ?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="extract"></a>-extract <var>geometry</var></h3>
</div>

<p class="magick-description">Extract the specified area from image.</p>

<p>This option is most useful for extracting a subregion of a very large raw
image.  Note that these two commands are equivalent:</p>

<pre><code>
convert -size 16000x16000 -depth 8 -extract 640x480+1280+960 \ 
  image.rgb image.png",
convert -size 16000x16000 -depth 8 'image.rgb[640x480+1280+960]' \
  image.rgb image.png"
</code></pre>

<p>If you omit the offsets, as in</p>

<pre><code>
convert -size 16000x16000 -depth 8 -extract 640x480 \ 
  image.rgb image.png
</code></pre>

<p>the image is <var>resized</var> to the specified dimensions instead,
equivalent to:</p>

<pre><code>
convert -size 16000x16000 -depth 8 -resize 640x480 image.rgb image.png
</code></pre>

<p><?php seeGeometry(); ?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="family"></a>-family <var>fontFamily</var></h3>
</div>

<p class="magick-description">Set a font family for text.</p>

<p>This setting suggests a font family that ImageMagick should try to use for
rendering text. If the family can be found it is used; if not, a default font
(e.g., "Arial") or a family known to be similar is substituted (e.g.,
"Courier" might be used if "System" is requested but not found).  </p>

<p>For other settings that affect fonts, see the options <a
href="#font">-font</a>, <a href="#stretch">-stretch</a>, <a
href="#style">-style</a>, and <a href="#weight">-weight</a>.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="features"></a>-features <var>distance</var></h3>
</div>

<p class="magick-description">display (co-occurrence matrix) texture measure features for each channel in the image in each of four directions (horizontal, vertical, left and right diagonals) for the specified distance.</p>

<pre><code>
Angular Second Moment       Sum Entropy
Contrast                    Entropy
Correlation                 Difference Variance
Sum of Squares Variance     Difference Entropy
Inverse Difference Moment   Information Measure of Correlation 1
Sum Average                 Information Measure of Correlation 2
Sum Variance                Maximum Correlation Coefficient
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="fft"></a>-fft</h3>
</div>

<p class="magick-description">implements the forward discrete Fourier transform (DFT).</p>

<p>This option is new as of ImageMagick 6.5.4-3 (and now working for Windows
users in ImageMagick 6.6.0-9). It transforms an image from the normal
(spatial) domain to the frequency domain. In the frequency domain, an image is
represented as a superposition of complex sinusoidal waves of varying
amplitudes. The image x and y coordinates are the possible frequencies along
the x and y directions, respectively, and the pixel intensity values are
complex numbers that correspond to the sinusoidal wave amplitudes. See for
example, <a href="http://en.wikipedia.org/wiki/Fourier_transform">Fourier
Transform</a>, <a href="http://en.wikipedia.org/wiki/DFT">Discrete Fourier
Transform</a> and <a href="http://en.wikipedia.org/wiki/FFT">Fast Fourier
Transform</a>.</p>

<p>A single image name is provided as output for this option. However, the
output result will have two components. It is either a two-frame image or two
separate images, depending upon whether the image format specified supports
multi-frame images. The reason that we get a dual output result is because the
frequency domain represents an image using complex numbers, which cannot be
visualized directly. Therefore, the complex values are automagically separated
into a two-component image representation. The first component is the
magnitude of the complex number and the second is the phase of the complex
number. See for example, <a
href="http://en.wikipedia.org/wiki/Complex_numbers">Complex Numbers</a>.</p>

<p>The magnitude and phase component images must be specified using image
formats that do not limit the color or compress the image. Thus, MIFF, TIF,
PFM, EXR and PNG are the recommended image formats to use. All of these
formats, except PNG support multi-frame images. So for example,</p>

<pre><code>
convert image.png -fft fft_image.miff
</code></pre>

<p>generates a magnitude image as <code>fft_image.miff[0]</code> and a phase
image as <code>fft_image.miff[1]</code>. Similarly,</p>

<pre><code>
convert image.png -fft fft_image.png
</code></pre>

<p>generates a magnitude image as <code>fft_image-0.png</code> and a phase image
as <code>fft_image-1.png</code>. If you prefer this representation, then you can
force any of the other formats to produce two output images by including <a
href="#adjoin">+adjoin</a> following -fft in the command line.</p>

<p>The input image can be any size, but if not square and even-dimensioned, it
is padded automagically to the larger of the width or height of the input
image and to an even number of pixels. The padding will occur at the bottom
and/or right sides of the input image. The resulting output magnitude and
phase images is square at this size. The kind of padding relies on the <a
href="#virtual-pixel">-virtual-pixel</a> setting.</p>

<p>Both output components will have dynamic ranges that fit within
[0, <var>QuantumRange</var>], so that HDRI need not be enabled.
Phase values nominally range from 0 to 2*π, but is scaled to span the full
dynamic range.  (The first few releases had non-HDRI scaled but HDRI not
scaled). The magnitude image is not scaled and thus generally will contain
very small values. As such, the image normally will appear totally black. In
order to view any detail, the magnitude image typically is enhanced with a log
function into what is usually called the spectrum. A log function is used to
enhance the darker values more in comparison to the lighter values. This can
be done, for example, as follows:</p>

<pre><code>
convert fft_image.miff[0] -contrast-stretch 0 \
  -evaluate log 1000 fft_image_spectrum.png"
</code></pre>

<p>where either <a href="#contrast-stretch">-contrast-stretch</a> 0 or <a
href="#auto-level">-auto-level</a> is used to scale the image to full dynamic
range, first. The argument to the <a href="#evaluate">-evaluate</a> log
typically is specified between 100 and 10,000, depending upon the amount of
detail that one wants to bring out in the spectrum. Larger values produce more
visible detail. Too much detail, however, may hide the important features.</p>

<p>The <a href="http://www.fftw.org/">FFTW</a> delegate library is required to
use <a href="#fft">-fft</a>.</p>

<p>Use <a href="#fft">+fft</a> to produce two output images that are the real
and imaginary components of the complex valued Fourier transform.</p>

<p>However, as the real and imaginary components can contain negative values,
this requires that IM be configured with HDRI enabled. In this case, you must
use either MIFF, TIF, PFM or MPC formats for the real and imaginary component
results, since they are formats that preserve both negative and fractional
values without clipping them or truncating the fractional part. With either
MIFF or TIF, one should add -define quantum:format=32, to allow those image
types to work properly in HDRI mode without clipping.</p>

<p>The real and imaginary component images resulting from <a
href="#fft">+fft</a> are also square, even dimensioned images due to the same
padding that was discussed above for the magnitude and phase component
images.</p>

<p>See the discussion on HDRI implementations of ImageMagick on the page <a
href="<?php echo $_SESSION['RelativePath']
?>/../script/high-dynamic-range.php" >High Dynamic-Range Images</a>. For more
about HDRI go the ImageMagick <a
href="https://www.imagemagick.org/Usage/basics/#hdri" >Usage</a> pages, <a
href="http://www.fmwconcepts.com/imagemagick/fourier_transforms/fourier.html"
>Fred's Fourier Processing With ImageMagick page</a> or this <a
 href="http://en.wikipedia.org/wiki/High_dynamic_range_imaging" >Wikipedia</a>
 entry.  </p>

<p>By default the FFT is normalized (and the IFT is not). Use "<code><a href="#define" >-define</a> fourier:normalize=forward</code> to explicitly normalize the FFT and unnormalize the IFT.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="fill"></a>-fill <var>color</var></h3>
</div>

<p class="magick-description">color to use when filling a graphic primitive.</p>

<p>This option accepts a color name, a hex color, or a numerical RGB, RGBA,
HSL, HSLA, CMYK, or CMYKA specification.  See <a href="<?php echo
$_SESSION['RelativePath'] ?>/../script/color.php" >Color Names</a> for
a description of how to properly specify the color argument.</p>

<p>Enclose the color specification in quotation marks to prevent the "#" or
the parentheses from being interpreted by your shell.</p>

<p>For example,</p>

<pre><code>
-fill blue
-fill "#ddddff"
-fill "rgb(255,255,255)"
</code></pre>

<p>See <a href="#draw">-draw</a> for further details.</p>

<p>To print a complete list of color names, use the <a href="#list">-list color</a> option.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="filter"></a>-filter <var>type</var></h3>
</div>

<p class="magick-description">Use this <var>type</var> of filter when resizing or distorting an image.</p>

<p>Use this option to affect the resizing operation of an image during
operations such as <a href="#resize">-resize</a> and <a href="#distort"
>-distort</a>. For example you can use a simple resize filter such as:</p>

<pre><code>
Point       Hermite       Cubic
Box         Gaussian      Catrom
Triangle    Quadratic     Mitchell
</code></pre>

<p>The <code>Bessel</code> and <code>Sinc</code> filter is also provided (as well
as a faster <code>SincFast</code> equivalent form).  However these filters are
generally useless on their own as they are infinite filters that are being
clipped to the filters support size. Their direct use is not recommended
except via expert settings (see below). </p>

<p>Instead these special filter functions are typically windowed by a windowing
function that the <a href="#filter" >-filter</a> setting defines.   That is
using these functions will define a 'Windowed' filter, appropriate to the
operator involved.  Windowed filters include: </p>

<pre><code>
Lanczos       Hamming       Parzen
Blackman      Kaiser        Welsh
Hanning       Bartlett      Bohman
</code></pre>

<p>Also one special self-windowing filter is also provided
<code>Lagrange</code>, which will automagically re-adjust its function depending
on the current 'support' or 'lobes' expert settings (see below).</p>

<p>If you do not select a filter with this option, the filter defaults to
<code>Mitchell</code> for a colormapped image, an image with a matte channel, or
if the image is enlarged.  Otherwise the filter default to
<code>Lanczos</code>.</p>

<p>To print a complete list of resize filters, use the <a href="#list">-list
filter</a> option.</p>

<p>You can modify how the filter behaves as it scales your image through the
use of these expert settings (see also <a href="#define" >-define</a> and <a
href="#set" >-set</a>):-</p>

<table class="table table-sm table-striped">
  <tr>
    <td>-define filter:blur=<var>factor</var></td>
    <td>Scale the X axis of the filter (and its window). Use &gt; 1.0 for
    blurry or &lt; 1.0 for sharp. This should only be used with Gaussian and
    Gaussian-like filters simple filters, or you may not get the expected
    results. </td>
  </tr>

  <tr>
    <td>-define filter:support=<var>radius</var></td>
    <td>Set the filter support radius. Defines how large the filter should be and
    thus directly defines how slow the filtered resampling process is. All
    filters have a default 'preferred' support size. Some filters like
    <code>Lagrange</code> and windowed filters adjust themselves depending on
    this value.  With simple filters this value either does nothing (but slow
    the resampling), or will clip the filter function in a detrimental way.
    </td>
  </tr>

  <tr>
    <td>-define filter:lobes=<var>count</var></td>
    <td>Set the number of lobes to use for the Sinc/Bessel filter. This an
    alternative way of specifying the 'support' range of the filter, that is
    designed to be more suited to windowed filters, especially when used for
    image distorts.</td>
  </tr>

  <tr>
    <td>-define filter:sigma=<var>value</var></td>
    <td>The 'sigma' value used to define the <code>Gaussian</code> filter.  Default
    sigma value is '<code>0.5</code>'.  It only effects <code>Gaussian</code> but
    does not shrink (but may enlarge) the filter's 'support'.  It can be used
    to generate very small blurs but without the filter 'missing' pixels due
    to using a small support setting. A larger value of '<code>0.707</code>'
    (a value of '1/sqrt(2)') is another common setting. </td>
  </tr>

  <tr>
    <td>-define filter:b=<var>b-spline_factor</var></td>
  </tr>

  <tr>
    <td>-define filter:c=<var>keys_alpha_factor</var></td>
    <td>Redefine the values used for cubic filters such as <code>Cubic</code>,
    <code>Catrom</code>, <code>Mitchel</code>, and <code>Hermite</code>, as well as
    the <code>Parzen</code> cubic windowing function. If only one of the values
    are defined, the other is set so as to generate a 'Cubic-Keys' filter.
    The values meaning was defined by a research paper by
    Mitchell-Netravali.</td>
  </tr>

  <tr>
    <td>-define filter:kaiser-beta=<var>value</var></td>
    <td>The 'alpha' value used to as part of the Kaiser Windowing function.
    Default value is '6.5'.  It only effects Kaiser windowing function, and
    does not effect any other attributes.
    Before ImageMagick v6.7.6-10, this option was known as "filter:alpha", (an
    inheritance from the very old "zoom" program). It was changed to bring the
    function in line with more modern academic research usage, and better
    assign it be more definitive.  </td>
  </tr>

  <tr>
    <td>-define filter:kaiser-alpha=<var>value</var></td>
    <td>This value when multiplied by 'PI' is equivalent to "kaiser-beta", and
    will override that setting.  It only effects Kaiser windowing function,
    and does not effect any other attributes. </td>
  </tr>

  <tr>
    <td>-define filter:filter=<var>filter_function</var></td>
    <td>Use this function directly as the weighting filter.  This will allow
    you to directly use a windowing function such as <code>Blackman</code>,
    as a resampling filter, rather than as its normal usage as a windowing
    function.  If defined, no windowing function also defined, the window function is set
    to <code>Box</code>). Directly specifying <code>Sinc</code> or <code>Jinc</code>
    as a filter will also do this. </td>
  </tr>

  <tr>
    <td>-define filter:window=<var>filter_function</var></td>
    <td>The IIR (infinite impulse response) filters <code>Sinc</code> and
    <code>Jinc</code> are windowed (brought down to zero over the defined
    support range) with the given filter. This allows you to specify a filter
    function to be used as a windowing function for these IIR filters.
    Many of the defined filters are actually windowing functions for these IIR
    filters.  A typical choices is <code>Box</code>, (which effectively turns
    off the windowing function).  </td>
  </tr>

  <tr>
    <td>-define filter:win-support=<var>radius</var></td>
    <td>Scale windowing function to this size instead.  This causes the windowing
    (or self-windowing Lagrange filter) to act is if the support window is
    larger than what is actually supplied to the calling operator.  The filter
    however is still clipped to the real support size given.  If unset this
    will equal the normal filter support size. </td>
  </tr>

  <tr>
    <td>-define filter:verbose=<var>1</var></td>
    <td>This causes IM to print information on the final internal filter
    selection to standard output.  This includes a commented header on the
    filter settings being used, and data allowing the filter weights to be
    easily graphed.  Note however that some filters are internally defined in terms of other filters.  The <code>Lanczos</code> filter for example is defined in terms of
    a <code>SincFast</code> windowed <code>SincFast</code> filter, while
    <code>Mitchell</code> is defined as a general <code>Cubic</code> family filter
    with specific 'B' and 'C' settings. </td>
  </tr>

</table>

<p>For example, to get a 8 lobe jinc windowed sinc filter (Genseng filter?):</p>

<pre><code>
convert image.png \
  -filter sinc \
  -set filter:window=jinc \
  -set filter:lobes=8 \
  -resize 150%   image.jpg"
</code></pre>

<p>Or a raw un-windowed Sinc filter with 4 lobes:</p>

<pre><code>
convert image.png \
  -set filter:filter=sinc \
  -set filter:lobes=4 \
  -resize 150%   image.jpg"
</code></pre>

<p>To extract the data for a raw windowing function, combine it with
a '<code>Box</code>' filter.  For example the '<code>Welch</code> parabolic
windowing function. </p>

<pre><code>
convert null: -define filter:filter=Box \
  -define filter:window=Welch \
  -define filter:support=1.0 \
  -define filter:verbose=1 \
  -resize 2 null:  > window_welch.dat
gnuplot
  set grid
  plot \"window_welch.dat\" with lines
</code></pre>

<p>Note that the use of expert options is provided for image processing experts
who have studied and understand how resize filters work. Without this
knowledge, and an understanding of the definition of the actual filters
involved, using expert settings are more likely to be detrimental to your image
resizing.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="flatten"></a>-flatten</h3>
</div>

<p class="magick-description">This is a simple alias for the <a href="#layers" >-layers</a> method "flatten".</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="flip"></a>-flip</h3>
</div>

<p class="magick-description">create a <var>mirror image</var></p>

<p>reflect the scanlines in the vertical direction. The image will be mirrored
upside-down. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="floodfill"></a>-floodfill {<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var> <var>color</var></h3>
</div>

<p class="magick-description">floodfill the image with color at the specified offset.</p>

<p>Flood fill starts from the given 'seed point' which is not gravity effected.
Any color that matches within <a href="#fuzz" >-fuzz</a> color distance of the
given <var>color</var>  argument, connected to that 'seed point'
will be replaced with the current <a href="#fill" >-fill</a> color. </p>

<p>Note that if the pixel at the 'seed point' does not itself match the given
<var>color</var> (according to <a href="#fuzz" >-fuzz</a>), then no
action will be taken. </p>

<p>This operator works more like the <a href="#opaque" >-opaque</a> option, than
a more general flood fill that reads the matching color directly at the 'seed
point'. For this form of flood fill, look at <a href="#draw" >-draw</a>  and
its 'color floodfill' drawing method.  </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="flop"></a>-flop</h3>
</div>

<p class="magick-description">create a <var>mirror image</var>.</p>

<p>Reflect the scanlines in the horizontal direction, just like the image in
a vertical mirror. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="font"></a>-font <var>name</var></h3>
</div>

<p class="magick-description">set the font to use when annotating images with text, or creating labels.</p>

<p>To print a complete list of fonts, use the <a href="#list">-list font</a>
option (for versions prior to 6.3.6, use 'type' instead of 'font').</p>

<p>In addition to the fonts specified by the above pre-defined list, you can
also specify a font from a specific source.  For example <code>Arial.ttf</code>
is a TrueType font file, <code>ps:helvetica</code> is PostScript font, and
<code>x:fixed</code> is X11 font.</p>

<p>For other settings that affect fonts, see the options <a
href="#family">-family</a>, <a href="#stretch">-stretch</a>, <a
href="#style">-style</a>, and <a href="#weight">-weight</a>. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="foreground"></a>-foreground <var>color</var></h3>
</div>

<p class="magick-description">Define the foreground color for menus.", "display</p>

<p>The color is specified using the format described under the <a
href="#fill">-fill</a> option.</p>

<p>The default foreground color is black.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="format"></a>-format <var>type</var></h3>
</div>

<p class="magick-description">the image format type.</p>

<p>When used with the <code>mogrify</code> utility, this option converts any
image to the image <a href="<?php echo
$_SESSION['RelativePath']?>/../script/formats.php">format</a> you specify.
For a list of image format types supported by ImageMagick, use <a
href="#list">-list format</a>.</p>

<p>By default the file is written to its original name. However, if the
filename extension matches a supported format, the extension is replaced with
the image format type specified with <a href="#format">-format</a>. For
example, if you specify <var>tiff</var> as the format type and the
input image filename is <var>image.gif</var>, the output image
filename becomes <var>image.tiff</var>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="format_identify_"></a>-format <var>string</var></h3>
</div>

<p class="magick-description">output formatted image characteristics.</p>

<p>See <a href="<?php echo
$_SESSION['RelativePath']?>/../script/escape.php">Format and Print Image
Properties</a> for an explanation on how to specify the argument to this
option.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="frame"></a>-frame <var>geometry</var></h3>
</div>

<p class="magick-description">Surround the image with a border or beveled frame.</p>

<p>The color of the border is specified with the <a href="#mattecolor"
>-mattecolor</a> command line option. </p>

<p><?php seeGeometry(); ?> The <var>size</var> portion of the <var>geometry</var> argument indicates the amount of extra width and
height that is added to the dimensions of the image. If no offsets are given
in the <var>geometry</var> argument, then the border added is
a solid color.  Offsets <var>x</var> and <var>y</var>, if present, specify that
the width and height of the border is partitioned to form an outer bevel of
thickness <var>x</var> pixels and an inner bevel of thickness
<var>y</var> pixels. Negative offsets make no sense as frame arguments.
</p>

<p>The <a href="#frame">-frame</a> option is affected by the current <a
href="#compose">-compose</a> setting and assumes that this is using the default
'<code>Over</code>' composition method.  It generates an image of the appropriate
size with the current <a href="#bordercolor">-bordercolor</a> setting, and then
draws the frame of four distinct colors close to the current <a
href="#mattecolor">-mattecolor</a>.  The original image is then overlaid onto
center of this image.  This means that with the default compose method of
'<code>Over</code>' any transparent parts may be replaced by the current <a
href="#bordercolor">-bordercolor</a> setting.</p>

<p>The image composition is not
affected by the <a href="#gravity">-gravity</a> option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="frame_import_"></a>-frame</h3>
</div>

<p class="magick-description">include the X window frame in the imported image. </p>
<div style="margin: auto;">
  <h3 class="magick-header"><a id="function"></a>-function <var>function</var> <var>parameters</var></h3>
</div>

<p class="magick-description">Apply a function to channel values.</p>

<p>This operator performs calculations based on the given arguments to modify
each of the color values for each previously set <a
href="#channel">-channel</a> in the image. See <a
href="#evaluate">-evaluate</a> for details concerning how the results of the
calculations are handled.</p>

<p>This is can be considered a multi-argument version of the <a
href="#evaluate">-evaluate</a> operator. (Added in
ImageMagick 6.4.8−8.)</p>

<p>Here,  <var>parameters</var> is a comma-separated list of
numerical values. The number of values varies depending on which <var>function</var> is selected. Choose the <var>function</var> from:</p>

<pre><code>
Polynomial
Sinusoid
Arcsin
Arctan
</code></pre>

<p>To print a complete list of <a href="#function">-function</a> operators,
use <a href="#list">-list function</a>. Descriptions follow.</p>

<dl class="row">
  <dt class="col-md-4">Polynomial</dt>
  <dd class="col-md-8"><p>The <code>Polynomial</code> function takes an arbitrary number of parameters,
these being the coefficients of a polynomial, in decreasing order of degree.
That is, entering</p>

<pre><code>
-function Polynomial <var>a</var><sub><var>n</var></sub>,<var>a</var><sub><var>n</var>-1</sub>,...<var>a</var><sub>1</sub>,<var>a</var><sub>0</sub>
</code></pre>

<p>will invoke a polynomial function given by</p>

<pre><code>
<var>a</var><sub><var>n</var></sub> <b><var>u</var></b><sup><var>n</var></sup> + <var>a</var><sub><var>n</var>-1</sub> <b><var>u</var></b><sup><var>n</var>-1</sup> + ··· <var>a</var><sub>1</sub> <b><var>u</var></b> + <var>a</var><sub>0</sub>,
</code></pre>

<p>where <b><var>u</var></b> is pixel's original normalized channel value.</p>

<p>The <code>Polynomial</code> function can be used in place of <code>Set</code>
(the <var>constant</var> polynomial) and <code>Add</code>, <code>Divide</code>,
<code>Multiply</code>, and <code>Subtract</code> (some <var>linear</var>
polynomials) of the <a href="#evaluate">-evaluate</a> operator. The <a
href="#level">-level</a> operator also affects channels linearly. Some
correspondences follow.</p>

<table class="table table-sm table-striped">
  <tr>
        <td>-evaluate Set <var>value</var> </td>
        <td>-function Polynomial <var>value</var></td>
        <td>(Constant functions; set <var>value</var>×100% gray when channels are RGB.)</td>
  </tr>
  <tr>
        <td>-evaluate Add <var>value</var> </td>
        <td>-function Polynomial 1,<var>value</var></td>
  </tr>
  <tr>
        <td>-evaluate Subtract <var>value</var> </td>
        <td>-function Polynomial 1,−<var>value</var></td>
  </tr>
  <tr>
        <td>-evaluate Multiply <var>value</var> </td>
        <td>-function Polynomial <var>value</var>,0</td>
  </tr>
  <tr>
        <td>+level  black% x white%</td>
        <td>-function Polynomial  A,B</td>
        <td>(Reduce contrast. Here, A=(white-black)/100 and  B=black/100.)</td>
  </tr>
</table>

<p>The <code>Polynomial</code> function gives great versatility, since
polynomials can be used to fit any continuous curve to any degree of accuracy
desired.</p>

</dd>
<dt class="col-md-4">Sinusoid</dt>
<dd class="col-md-8">
<p>The <code>Sinusoid</code> function can be used to vary the channel values
sinusoidally by setting frequency, phase shift, amplitude, and a bias. These
values are given as one to four parameters, as follows,</p>

<pre><code>
-function <code>Sinusoid</code> <var>freq</var>,[<var>phase</var>,[<var>amp</var>,[<var>bias</var>]]]
</code></pre>

<p>where <var>phase</var> is in degrees. (The domain [0,1] of the function
corresponds to 0 through <var>freq</var>×360 degrees.)
The result is that if a pixel's normalized channel value is originally
<b><var>u</var></b>, its resulting normalized value is given by </p>

<pre><code>
<var>amp</var> * sin(2*π* (<var>freq</var> * <b><var>u</var></b> + <var>phase</var> / 360)) + <var>bias</var>
</code></pre>

<p> For example, the following generates a curve that starts and ends at 0.9
(when <b><var>u</var></b>=0 and 1, resp.), oscillating three times between
.7−.2=.5 and .7+.2=.9. </p>

<pre><code>
-function Sinusoid 3,-90,.2,.7
</code></pre>

<p>The default values of <var>amp</var> and <var>bias</var> are both .5. The default for <var>phase</var>
is 0.</p>

<p>The <code>Sinusoid</code> function generalizes <code>Sin</code> and
<code>Cos</code> of the <a href="#evaluate">-evaluate</a> operator by allowing
varying amplitude, phase and bias. The correspondence is as follows.</p>

<table class="table table-sm table-striped">
  <tr>
        <td>-evaluate Sin <var>freq</var> </td>
        <td>-function Sinusoid <var>freq</var>,0 </td>
  </tr>
  <tr>
        <td>-evaluate Cos <var>freq</var> </td>
        <td>-function Sinusoid <var>freq</var>,90 </td>
  </tr>
</table>
  </dd>
<dt class="col-md-4">ArcSin</dt>
<dd class="col-md-8">
<p>The <code>ArcSin</code> function generates the inverse curve of a Sinusoid,
and can be used to generate cylindrical distortion and displacement maps.
The curve can be adjusted relative to both the input values and output range
of values.</p>

<pre><code>
-function <code>ArcSin</code> <var>width</var>,[<var>center</var>,[<var>range</var>,[<var>bias</var>]]]
</code></pre>

<p>with all values given in terms of normalized color values (0.0 for black,
1.0 for white). Defaulting to values covering the full range from 0.0 to 1.0
for bout input (<var>width</var>), and output (<var>width</var>) values. '<code>1.0,0.5,1.0,0.5</code>' </p>

<pre><code>
<var>range</var>/π * asin( 2/<var>width</var> * ( <b><var>u</var></b> - <var>center</var> ) ) + <var>bias</var>
</code></pre>

</dd>
<dt class="col-md-4">ArcTan</dt>
<dd class="col-md-8">
<p>The <code>ArcTan</code> function generates a curve that smooth crosses from
limit values at infinities, though a center using the given slope value.
All these values can be adjusted via the arguments.</p>

<pre><code>
-function <code>ArcTan</code> <var>slope</var>,[<var>center</var>,[<var>range</var>,[<var>bias</var>]]]
</code></pre>

<p>Defaulting to '<code>1.0,0.5,1.0,0.5</code>'.
</p>

<pre><code>
<var>range</var>/π * atan( <var>slope</var>*π * ( <b><var>u</var></b> - <var>center</var> ) ) + <var>bias</var>
</code></pre>
  </dd>
</dl>



<div style="margin: auto;">
  <h3 class="magick-header"><a id="fuzz"></a>-fuzz <var>distance</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">Colors within this <var>distance</var> are considered equal.</p>

<p>A number of algorithms search for a target color. By default the color must
be exact. Use this option to match colors that are close to the target color
in RGB space. For example, if you want to automagically trim the edges of an
image with <a href="#trim">-trim</a> but the image was scanned and the target
background color may differ by a small amount. This option can account for
these differences.</p>

<p>The <var>distance</var> can be in absolute intensity units or, by
appending <code>%</code> as a percentage of the maximum possible intensity (255,
65535, or 4294967295).</p>

<p>Use <a href="#fuzz" >+fuzz</a> to reset the fuzz value to 0.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="fx"></a>-fx <var>expression</var></h3>
</div>

<p class="magick-description">apply a mathematical expression to an image or image channels.</p>

<p>If the first character of <var>expression</var> is <code>@</code>,
the expression is read from a file titled by the remaining characters in the
string.</p>

<p>See <a href="<?php echo $_SESSION['RelativePath']?>/../script/fx.php">FX,
The Special Effects Image Operator</a> for a detailed discussion of this
option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="gamma"></a>-gamma <var>value</var></h3>
</div>

<p class="magick-description">level of gamma correction.</p>

<p>The same color image displayed on two different workstations may look
different due to differences in the display monitor. Use gamma correction to
adjust for this color difference.  Reasonable values extend from
<code>0.8</code> to <code>2.3</code>. Gamma less than 1.0 darkens the image and
gamma greater than 1.0 lightens it. Large adjustments to image gamma may
result in the loss of some image information if the pixel quantum size is only
eight bits (quantum range 0 to 255).</p>

<p>Gamma adjusts the image's channel values pixel-by-pixel according to
a power law, namely, pow(pixel,1/gamma) or pixel^(1/gamma), where pixel is the
normalized or 0 to 1 color value. For example, using a value of gamma=2 is the
same as taking the square root of the image.</p>

<p>You can apply separate gamma values to the red, green, and blue channels of
the image with a gamma value list delimited with commas (e.g.,
<code>1.7,2.3,1.2</code>).</p>

<p>Use <a href="#gamma">+gamma <var>value</var></a> to set the
image gamma level without actually adjusting the image pixels. This option
is useful if the image is of a known gamma but not set as an image attribute
(e.g. PNG images).  Write the "file gamma" which is the reciprocal of the
display gamma; e.g., if your image is sRGB and you want to write a PNG gAMA
chunk, use</p>

<pre><code>
convert input.png +gamma .45455 output.png
</code></pre>

<p>(0.45455 is 1/2.2)</p>

<p>Note that gamma adjustments are also available via the <a href="#level">-level</a> operator.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="gaussian-blur"></a>-gaussian-blur <var>radius</var><br />-gaussian-blur <var>radius</var>x<var>sigma</var></h3>
</div>

<p class="magick-description">Blur the image with a Gaussian operator.</p>

<p>Convolve the image with a Gaussian or normal distribution using the given
<var >Sigma</var> value.  The formula is:</p>

<p class="text-center"><img class="img-thumbnail" alt="gaussian distribution" width="243px" height="42px" src="<?php echo $_SESSION['RelativePath']?>/../image/gaussian-blur.png"/> </p>

<p>The <var >Sigma</var> value is the important argument, and
determines the actual amount of blurring that will take place. </p>

<p>The <var >Radius</var> is only used to determine the size of the
array which will hold the calculated Gaussian distribution. It should be an
integer.  If not given, or set to zero, IM will calculate the largest possible
radius that will provide meaningful results for the Gaussian distribution.
</p>

<p>The larger the <var >Radius</var> the radius the slower the
operation is. However too small a <var >Radius</var>, and sever
aliasing effects may result.  As a guideline, <var >Radius</var>
should be at least twice the <var >Sigma</var> value, though three
times will produce a more accurate result. </p>

<p>This differs from the faster <a href="#blur">-blur</a> operator in that a
full 2-dimensional convolution is used to generate the weighted average of the
neighboring pixels. </p>

<p>The <a href="#virtual-pixel">-virtual-pixel</a> setting will determine how
pixels which are outside the image proper are blurred into the final result.
</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="geometry"></a>-geometry <var>geometry</var></h3>
</div>

<p class="magick-description">Set the preferred size and location of the image.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="gravity"></a>-gravity <var>type</var></h3>
</div>

<p class="magick-description">Sets the current gravity suggestion for various other settings and options.</p>

<p>Choices include: <code>NorthWest</code>, <code>North</code>,
<code>NorthEast</code>, <code>West</code>, <code>Center</code>, <code>East</code>,
<code>SouthWest</code>, <code>South</code>, <code>SouthEast</code>.  Use <a
href="#list">-list gravity</a> to get a complete list of <a
href="#gravity">-gravity</a> settings available in your ImageMagick
installation.</p>

<p>The direction you choose specifies where to position text or subimages. For
example, a gravity of <code>Center</code> forces the text to be centered within
the image. By default, the image gravity is <code>undefined</code>. See <a
href="#draw">-draw</a> for more details about graphic primitives.  Only the
text primitive of <a href="#draw">-draw</a> is affected by the <a
href="#gravity">-gravity</a> option.</p>

<p>The <a href="#gravity">-gravity</a> option is also used in concert with the
<a href="#geometry">-geometry</a> setting and other settings or options that
take <var>geometry</var> as an argument, such as the <a
href="#crop">-crop</a> option. </p>

<p>If a <a href="#gravity">-gravity</a> setting occurs before another option
or setting having a <var>geometry</var> argument that specifies an
offset, the offset is usually applied to the point within the image suggested
by the <a href="#gravity">-gravity</a> argument.  Thus, in the following
command, for example, suppose the file <code>image.png</code> has dimensions
200x100. The offset specified by the argument to <a href="#region">-region</a>
is (−40,+20). The argument to <a href="#gravity">-gravity</a> is
<code>Center</code>, which suggests the midpoint of the image, at the point
(100,50). The offset (−40,20) is applied to that point, giving
(100−40,50+20)=(60,70), so the specified 10x10 region is located at
that point. (In addition, the <a href="#gravity">-gravity</a> affects the
region itself, which is <var>centered</var> at the pixel
coordinate (60,70). (<?php seeGeometry();?>)</p>

<pre><code>
convert image.png -gravity Center -region 10x10-40+20 \ 
  -negate output.png
</code></pre>

<p>When used as an option to <a href="<?php echo
$_SESSION['RelativePath']?>/../script/composite.php">composite</a>, <a
href="#gravity">-gravity</a> gives the direction that the image gravitates
within the composite.</p>

<p>When used as an option to <?php cmd("montage"); ?>, <a
href="#gravity">-gravity</a> gives the direction that an image gravitates
within a tile. The default gravity is <code>Center</code> for this purpose.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="grayscale"></a>-grayscale <var>method</var></h3>
</div>

<p class="magick-description">convert image to grayscale.</p>

<p>This will use one of the <a href="#intensity" >-intensity</a> methods to
convert the given image into a linear-grayscale image. </p>

<p>For example, to convert an image to (linear) Rec709Luminance grayscale,  type:</p>

<pre><code>
convert in.png -grayscale Rec709Luminance out.png
</code></pre>

<p>which is equivalent to:</p>

<pre><code>
convert in.png -colorspace gray out.png
</code></pre>

<p>Similarly, to convert an image to (non-linear) Rec709Luma grayscale,  type:</p>

<pre><code>
convert in.png -grayscale Rec709Luma out.png
</code></pre>

<p>which is equivalent to:</p>

<pre><code>
convert in.png -set colorspace RGB -colorspace gray out.png
</code></pre>

<p>Note that a 'colorspace' intensity method will produce the same result
regardless of the current colorpsace of the image. But a 'mathematical'
intensity method will depend on the current colorspace the image is currently
using. </p>

<p>While this operation uses an <a href="#intensity" >-intensity</a> method, 
it does not use or set the <a href="#intensity" >-intensity</a> setting, so
will not effect other operations that may use that setting.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="green-primary"></a>-green-primary <var>x,y</var></h3>
</div>

<p class="magick-description">green chromaticity primary point.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="hald-clut"></a>-hald-clut</h3>
</div>

<p class="magick-description">apply a Hald color lookup table to the image.</p>

<p>A Hald color lookup table is a 3-dimensional color cube mapped to 2
dimensions.  Create it with the <code>HALD:</code> prefix (e.g. HALD:8).  You
can apply any color transformation to the Hald image and then use this option
to apply the transform to the image. </p>

<pre><code>
convert image.png hald.png -hald-clut transform.png
</code></pre>

<p>This option provides a convenient method for you to use Gimp or Photoshop
to make color corrections to the Hald CLUT image and subsequently apply them
to multiple images using an ImageMagick script. </p>

<p>Note that the representation is only of the normal RGB color space and that
the whole color value triplet is used for the interpolated lookup of the
represented Hald color cube image.  Because of this the operation is not <a
href="#channel" >-channel</a> setting effected, nor can it adjust or modify an
images transparency or alpha/matte channel.</p>

<p>See also <a href="#clut" >-clut</a> which provides color value replacement
of the individual color channels, usually involving a simpler grayscale
image. E.g:  grayscale to color replacement, or modification by a histogram
mapping. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="help"></a>-help</h3>
</div>

<p class="magick-description">print usage instructions.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="highlight-color"></a>-highlight-color <var>color</var></h3>
</div>

<p class="magick-description">when comparing images, emphasize pixel differences with this color.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="hough-lines"></a>-hough-lines <var>width</var>x<var>height</var>{<var>+threshold</var>}</h3>
</div>

<p class="magick-description">identify straight lines in the image (e.g. -hough-lines 9x9+195).</p>

<p>Use the Hough line detector with any binary edge extracted image to locate and draw any straight lines that it finds.</p>

<p>The process accumulates counts for every white pixel in the binary edge image for every possible orientation (for angles from 0 to 179 in 1 deg increments) and distance from the center of the image to the corners (in 1 px increments). It stores the counts in an accumulator matrix of angle vs distance. The size of the accumulator will be 180x(diagonal/2). Next it searches the accumulator for peaks in counts and converts the locations of the peaks to slope and intercept in the normal x,y input image space. The algorithm uses slope/intercepts to find the endpoints clipped to the bounds of the image. The lines are drawn from the given endpoints. The counts are a measure of the length of the lines.</p>.

<p>The WxH arguments specify the filter size for locating the peaks in the Hough accumulator. The threshold excludes lines whose counts are less than the threshold value.</p>

<p>Use <code><a href="#background" >-background</a></code> to specify the color of the background onto which the lines will be drawn. The default is black.</p>

<p>Use <code><a href="#fill" >-fill</a></code> to specify the color of the lines. The default is black.</p>

<p>Use <code><a href="#stroke" >-stroke</a></code> and <code><a href="#strokewidth" >-strokewidth</a></code> to specify the thickness of the lines. The default is black and no strokewidth.</p>

<p>A text file listing the endpoints and counts may be created by using the suffix, .mvg, for the output image.</p>

<p>Use <code><a href="#define" >-define</a> hough-lines:accumulator=true</code> to return the accumulator image in addition to the lines image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="iconGeometry"></a>-iconGeometry <var>geometry</var></h3>
</div>

<p class="magick-description">specify the icon geometry.</p>

<p>Offsets, if present in the geometry specification, are handled in the same
manner as the <a href="#geometry">-geometry</a> option, using X11 style to
handle negative offsets.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="iconic"></a>-iconic</h3>
</div>

<p class="magick-description">start in icon mode in X Windows", 'animate', 'display</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="identify"></a>-identify</h3>
</div>

<p class="magick-description">identify the format and characteristics of the image.</p>

<p>This information is printed: image scene number; image name; image size;
the image class (<var>DirectClass</var> or <var>PseudoClass</var>); the total number of unique colors; and the
number of seconds to read and transform the image. Refer to <a href="<?php
echo $_SESSION['RelativePath']?>/../script/miff.php">MIFF</a> for
a description of the image class.</p>

<p>If <a href="#colors">-colors</a> is also specified, the total unique colors
in the image and color reduction error values are printed. Refer to <a
href="<?php echo $_SESSION['RelativePath']?>/../script/quantize.php">color
reduction algorithm</a> for a description of these values.</p>

<p>If <a href="#verbose">-verbose</a> precedes this option, copious
amounts of image properties are displayed including image statistics, profiles,
image histogram, and others.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="ift"></a>-ift</h3>
</div>

<p class="magick-description">implements the inverse discrete Fourier transform (DFT).</p>

<p>This option is new as of ImageMagick 6.5.4-3 (and now working for Windows
users in ImageMagick 6.6.0-9). It transforms a pair of magnitude and phase
images from the frequency domain to a single image in the normal or spatial
domain. See for example, <a
href="http://en.wikipedia.org/wiki/Fourier_transform">Fourier Transform</a>,
<a href="http://en.wikipedia.org/wiki/DFT">Discrete Fourier Transform</a> and
<a href="http://en.wikipedia.org/wiki/FFT">Fast Fourier Transform</a>.</p>

<p>For example, depending upon the image format used to store the result of
the <a href="#fft">-fft</a>, one would use either</p>

<pre><code>
convert fft_image.miff -ift fft_image_ift.png
</code></pre>

<p>or</p>

<pre><code>
convert fft_image-0.png fft_image-1.png -ift fft_image_ift.png
</code></pre>

<p>The resulting image may need to be cropped due to padding introduced when
the original image, prior to the <a href="#fft">-fft</a> or <a
href="#fft">+fft</a>, was not square or even dimensioned. Any padding is at
the right and/or bottom sides of the image.</p>

<p>The <a href="http://www.fftw.org/">FFTW</a> delegate library is required to
use <a href="#ift">-ift</a>.</p>

<p>Use <a href="#ift">+ift</a> (with HDRI enabled) to transform a pair of real
and imaginary images from the frequency domain to a single image in the normal
(spatial) domain.</p>

<p>By default the IFT is not normalized (and the FFT is). Use "<code><a href="#define" >-define</a> fourier:normalize=inverse</code> to explicitly normalize the IFT and unnormalize the FFT.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="immutable"></a>-immutable</h3>
</div>

<p class="magick-description">make image immutable.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="implode"></a>-implode <var>factor</var></h3>
</div>

<p class="magick-description">implode image pixels about the center.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="insert"></a>-insert <var>index</var></h3>
</div>

<p class="magick-description">insert the last image into the image sequence.</p>

<p>This option takes last image in the current image sequence and inserts it
at the given index. If a negative index is used, the insert position is
calculated before the last image is removed from the sequence. As such
<code>-insert -1</code> will result in no change to the image sequence.</p>

<p>The <code>+insert</code> option is equivalent to <code>-insert -1</code>. In
other words, insert the last image, at the end of the current image sequence.
Consequently this has no effect on the image sequence order.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="intensity"></a>-intensity <var>method</var></h3>
</div>

<p class="magick-description">method to generate intensity value from pixel.</p>

<p>ImageMagick provides a number of methods used in situations where an
operator needs to determine a single grayscale value for some purpose, from
an image with red, green, and blue pixel components. Typically the linear
<code>Rec709Luminance</code> formula is used, which is the same formula used when 
converting images to <code>-colorspace gray</code>. </p>

<p>The following formulas are currently provided, and will first convert
the pixel values to linear-RGB or non-linear sRGB colorspace before
being applied to calculate the final greyscale value. </p>

<dl class="row">
<dt class="col-md-4">Rec601Luma</dt><dd class="col-md-8">      0.298839R' + 0.586811G'+ 0.114350B'</dd>
<dt class="col-md-4">Rec601Luminance</dt><dd class="col-md-8"> 0.298839R + 0.586811G + 0.114350B</dd>
<dt class="col-md-4">Rec709Luma</dt><dd class="col-md-8">      0.212656R' + 0.715158G' + 0.072186B'</dd>
<dt class="col-md-4">Rec709Luminance</dt><dd class="col-md-8"> 0.212656R + 0.715158G + 0.072186B</dd>
<dt class="col-md-4">Brightness</dt><dd class="col-md-8">      max(R', G', B')</dd>
<dt class="col-md-4">Lightness</dt><dd class="col-md-8">       (min(R', G', B') + max(R', G', B')) / 2.0</dd>
</dl>

<p>Note that the above R,G,B values is the image's linear-RGB values, while
R',G',B' are sRGB non-linear values. </p>

<p>These intensity methods are mathematical in nature and will use the
current value in the images respective R,G,B channel regardless of
what that is, or what colorspace the image is currently using.</p>

<dl class="row">
<dt class="col-md-4">Average</dt><dd class="col-md-8">(R + G + B) / 3.0</dd>
<dt class="col-md-4">MS</dt><dd class="col-md-8">(R^2 + G^2 + B^2) / 3.0</dd>
<dt class="col-md-4">RMS</dt><dd class="col-md-8">sqrt( (R^2 + G^2 + B^2) / 3.0 )</dd>
</dl>

<p>These methods are often used for other purposes, such as generating a
grayscale difference image between two color images (using <a href="#compose"
>-compose</a> '<code>Difference</code>' composition. </p>

<p> For example The 'MS' (Mean Squared) setting is good for minimizing color
error comparisions.  While...  The method 'RMS' (Root Mean Squared) for
example is appropriate for calculating color vector distance, from a color
difference image.  This is equivalent to the color only component of the <a
href="#fuzz" >-fuzz</a> factor color compare setting.  </p>

<p>See also <a href="#grayscale" >-grayscale</a> which applies one of the above
grayscaling formula directly to an image without setting the <a
href="#intensity" >-intensity</a> setting.</p>

<p>The <a href="#colorspace" >-colorspace gray</a> image conversion also uses
the current intensity setting, but will always convert the image to the
appropriate sRGB or linear-RGB colorspace before appling the above
function.</p>

<p>To print a complete list of possible pixel intensity setting methods, use <a href="#list">-list intensity</a>.</p>

<p>Operators affected by the <a href="#intensity" >-intensity</a> setting include:</p>

<pre><code>
-adaptive-blur
-adaptive-sharpen
-black-threshold
-clut (when mapping greyscale CLUT image to alpha channel if set by -channels)
-colors for gray colorspace
-compose {LightenIntensity, DarkenIntensity, CopyOpacity, CopyBlack}
-contrast-stretch
-distort {ErodeIntensity, DilateIntensity}
-normalize
-random-threshold
-selective-blur
-shade
-threshold
-tint
-white-threshold
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="intent"></a>-intent <var>type</var></h3>
</div>

<p class="magick-description">use this type of rendering intent when managing the image color.</p>

<p>Use this option to affect the color management operation of an image (see
<a href="#profile">-profile</a>).  Choose from these intents: <code>Absolute,
Perceptual, Relative, Saturation</code>.</p>

<p>The default intent is Perceptual for the sRGB colorspace and undefined for the RGB and gray colorspaces.</p>

<p>To print a complete list of rendering intents, use <a href="#list">-list intent</a>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="interlace"></a>-interlace <var>type</var></h3>
</div>

<p class="magick-description">the type of interlacing scheme.</p>

<p>Choose from:</p>

<pre><code>
none
line
plane
partition
JPEG
GIF
PNG
</code></pre>

<p>This option is used to specify the type of interlacing scheme for raw image
formats such as <code>RGB</code> or <code>YUV</code>.</p>

<p><code>None</code> means do not interlace (RGBRGBRGBRGBRGBRGB...),</p>

<p><code>Line</code> uses scanline interlacing (RRR...GGG...BBB...RRR...GGG...BBB...), and.</p>

<p><code>Plane</code> uses plane interlacing (RRRRRR...GGGGGG...BBBBBB...).</p>

<p><code>Partition</code> is like plane except the different planes are saved to
individual files (e.g. image.R, image.G, and image.B).</p>

<p>Use <code>Line</code> or <code>Plane</code> to create an <code>interlaced
PNG</code> or <code>GIF</code> or <code>progressive JPEG</code> image.</p>

<p>To print a complete list of interlacing schemes, use <a href="#list">-list
interlace</a>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="interpolate"></a>-interpolate <var>type</var></h3>
</div>

<p class="magick-description">Set the pixel color interpolation method to use when looking up a color based on a floating point or real value.</p>

<p>When looking up the color of a pixel using a non-integer floating point
value, you typically fall in between the pixel colors defined by the source
image. This setting determines how the color is determined from the colors of
the pixels surrounding that point.  That is how to determine the color of a
point that falls between two, or even four different colored pixels. </p>

<dl class="row">
  <dt class="col-md-4">integer</dt>
  <dd class="col-md-8">The color of the top-left pixel (floor function)</dd>
  <dt class="col-md-4">nearest-neighbor</dt>
  <dd class="col-md-8">The nearest pixel to the lookup point (rounded function)</dd>
  <dt class="col-md-4">average</dt>
  <dd class="col-md-8">The average color of the surrounding four pixels</dd>
  <dt class="col-md-4">bilinear</dt>
  <dd class="col-md-8">A double linear interpolation of pixels (the default)</dd>
  <dt class="col-md-4">mesh</dt>
  <dd class="col-md-8">Divide area into two flat triangular interpolations</dd>
  <dt class="col-md-4">bicubic</dt>
  <dd class="col-md-8">Fitted bicubic-spines of surrounding 16 pixels</dd>
  <dt class="col-md-4">spline</dt>
  <dd class="col-md-8">Direct spline curves (colors are blurred)</dd>
  <dt class="col-md-4">filter</dt>
  <dd class="col-md-8">Use resize <a href="#filter">-filter</a> settings</dd>
</dl>

<p>This most important for distortion operators such as <a href="#distort"
>-distort</a>, <a href="#implode" >-implode</a>, <a href="#transform"
>-transform</a> and <a href="#fx" >-fx</a>. </p>

<p>To print a complete list of interpolation methods, use <a href="#list">-list interpolate</a>.</p>

<p>See also <a href="#virtual-pixel" >-virtual-pixel</a>, for control of the
lookup for positions outside the boundaries of the image. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="interline-spacing"></a>-interline-spacing <var>value</var></h3>
</div>

<p class="magick-description">the space between two text lines.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="interword-spacing"></a>-interword-spacing <var>value</var></h3>
</div>

<p class="magick-description">the space between two words.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="kerning"></a>-kerning <var>value</var></h3>
</div>

<p class="magick-description">the space between two letters.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="kuwahara"></a>-kuwahara <var>radius</var><br />-kuwahara <var>radius</var>x<var>sigma</var></h3>
</div>

<p class="magick-description">edge preserving noise reduction filter.</p>

<p>The <var >radius</var> is more important than the <var >sigma</var>. If <var >sigma</var> is left off, it will be computed automatically from the <var >radius</var> as <var >sigma</var>=<var >radius</var>-0.5. The <var >sigma</var> provides a bit of additional smoothing control.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="label"></a>-label <var>name</var></h3>
</div>

<p class="magick-description">assign a label to an image.</p>

<p>Use this option to assign a specific label to the image, as it is read in
or created.  You can use the <a href="#set" >-set</a> operation to re-assign
a the labels of images already read in.  Image formats such as TIFF, PNG,
MIFF, supports saving the label information with the image.</p>

<p>When saving an image to a <var>PostScript</var> file, any label
assigned to an image is used as a header string to print above the postscript
image. </p>

<p>You can include the image filename, type, width, height, or other image
attribute by embedding special format character.  See <a href="<?php echo
$_SESSION['RelativePath']?>/../script/escape.php">Format and Print Image
Properties</a> for details of the percent escape codes.</p>

<p>For example,</p>

<pre><code>
-label "%m:%f %wx%h"  bird.miff
</code></pre>

<p>assigns an image label of <code>MIFF:bird.miff 512x480</code> to the
"<code>bird.miff</code>" image and whose width is 512 and height is 480, as it
is read in.  If a  <a href="#label">+label</a> option was used instead, any
existing label present in the image would be used.  You can remove all labels
from an image by assigning the empty string. </p>

<p>A label is not drawn on the image, but is embedded in the image datastream
via <var>Label</var> tag or similar mechanism. If you want the label to be
visible on the image itself, use the <a href="#draw">-draw</a> option, or
during the final processing in the creation of an image montage.</p>

<p>If the first character of <var>string</var> is <var>@</var>, the image label is read from a file titled by the
remaining characters in the string. Labels in a file are literal, no embedded
formatting characters are recognized.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="lat"></a>-lat <var>width</var><br />-lat <var>width</var>x<var>height</var>{<var>+-</var>}<var>offset</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">perform local adaptive threshold.</p>

<p>Adaptively threshold each pixel based on the value of pixels in a
surrounding window.  If the current pixel is lighter than this average plus
the optional <code>offset</code>, then it is made white, otherwise it is made
black.  Small variations in pixel values such as found in scanned documents
can be ignored if offset is positive. A negative offset will make it more
sensitive to those small variations. </p>

<p>This is commonly used to threshold images with an uneven background.  It is
based on the assumption that average color of the small window is the
the local background color, from which to separate the foreground color. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="layers"></a>-layers <var>method</var></h3>
</div>

<p class="magick-description">handle multiple images forming a set of image layers or animation frames.</p>

<p>Perform various image operation methods to a ordered sequence of images
which may represent either a set of overlaid 'image layers', a GIF disposal
animation, or a fully-'coalesced' animation sequence. </p>

<table class="table table-sm table-striped">
  <tbody>
  <tr>
    <th style="width: 8%">Method</th>
    <th>Description</th>
  </tr>

  <tr>
    <td>compare-any</td>
    <td>Crop the second and later frames to the smallest rectangle
        that contains all the differences between the two images.  No GIF <a
        href="#dispose" >-dispose</a> methods are taken into account. </td>
  </tr>

  <tr><td></td><td>This exactly the same as the <a href="#deconstruct"
        >-deconstruct</a> operator, and does not preserve animations normal
        working, especially when animation used layer disposal methods such as
        '<code>Previous</code>' or '<code>Background</code>'. </td>
  </tr>

  <tr>
    <td>compare-clear</td>
    <td>As '<code>compare-any</code>' but crop to the bounds of any
       opaque pixels which become transparent in the second frame. That is the
       smallest image needed to mask or erase pixels for the next frame. </td>
  </tr>

  <tr>
    <td>compare-overlay</td>
    <td>As '<code>compare-any</code>' but crop to pixels that add
       extra color to the next image, as a result of overlaying color pixels.
       That is the smallest single overlaid image to add or change colors. </td>
   </tr>

   <tr><td></td><td>This can be used with the <a href="#compose" >-compose</a> alpha
       composition method '<code>change-mask</code>', to reduce the image to
       just the pixels that need to be overlaid. </td>
   </tr>

  <tr>
    <td>coalesce</td>
    <td>Equivalent to a call to the <a href="#coalesce"
        >-coalesce</a> operator.  Apply the layer disposal methods set in the
        current image sequence to form a fully defined animation sequence, as
        it should be displayed.  Effectively converting a GIF animation into a
        'film strip'-like animation.  </td>
  </tr>

  <tr>
    <td>composite</td>
    <td>Alpha Composition of two image lists, separated by a
        "<code>null:</code>" image, with the destination image list first, and
        the source images last.  An image from each list are composited
        together until one list is finished. The separator image and source
        image lists are removed. </td>
  </tr>


  <tr><td></td>
    <td>The <a href="#geometry" >-geometry</a> offset is adjusted according
        to <a href="#gravity" >-gravity</a> in accordance of the virtual
        canvas size of the first image in each list. Unlike a normal <a
        href="#composite" >-composite</a> operation, the canvas offset is also
        added to the final composite positioning of each image. </td> </tr>

  <tr><td></td>
    <td>If one of the image lists only contains one image, that image is
        applied to all the images in the other image list, regardless of which
        list it is. In this case it is the image meta-data of the list which
        preserved.  </td>
  </tr>


  <tr>
    <td>dispose</td>
    <td>This like '<code>coalesce</code>' but shows the look of
        the animation after the layer disposal method has been applied, before
        the next sub-frame image is overlaid. That is the 'dispose' image that
        results from the application of the GIF <a href="#dispose"
        >-dispose</a> method.  This allows you to check what
        is going wrong with a particular animation you may be developing.
        </td>
  </tr>

  <tr>
    <td>flatten</td>
    <td>Create a canvas the size of the first images virtual
        canvas using the current <a href="#background" >-background</a> color,
        and <a href="#compose" >-compose</a> each image in turn onto that
        canvas.  Images falling outside that canvas is clipped. Final
        image will have a zero virtual canvas offset. </td>
  </tr>

  <tr><td></td>
    <td>This usually used as one of the final 'image layering' operations
        overlaying all the prepared image layers into a final image. </td>
  </tr>

  <tr><td></td>
    <td>For a single image this method can also be used to fillout a virtual
        canvas with real pixels, or to underlay an opaque color to remove
        transparency from an image.</td>
  </tr>


  <tr>
    <td>merge</td>
    <td>As 'flatten' method but merging all the given image
        layers to create a new layer image just large enough to hold all the
        image without clipping or extra space. The new images virtual offset
        will preserve the position of the new layer, even if this offset is
        negative.  The virtual canvas size of the first image is preserved.
        </td>
  </tr>

  <tr><td></td><td>Caution is advised when handling image layers with
        negative offsets as few image file formats handle them correctly.
        Following this operation method with <a href="#repage" >+repage</a>
        will remove the layer offset, and create an image in which all the
        overlaid image positions relative to each other is preserved, though
        not necessarily exactly where you specified them.
        </td>
  </tr>

  <tr><td></td><td>See also 'trim-bounds' below which is closely related but
        without  doing the'flatten' to merge the images together. </td>
  </tr>

  <tr>
    <td>mosaic</td>
    <td>As 'flatten' method but expanding the initial canvas size
        of the first image in a positive direction only so as to hold all the
        image layers.  However as a virtual canvas is 'locked' to the origin,
        by its own definition, image layers with a negative offsets will still
        become clipped by the top and left edges. See 'merge' or 'trim-bounds'
        if this could be a problem. </td>

  </tr>

  <tr><td></td><td>This method is commonly used to layout individual image
        using various offset but without knowing the final canvas size. The
        resulting image will, like 'flatten' not have any virtual offset, so
        can be saved to any image file format. </td>
  </tr>


  <tr>
    <td>optimize</td>
    <td>Optimize a coalesced animation, into GIF animation using
        a number of general techniques.  This currently a short cut to
        apply both the '<code>optimize-frame</code>', and
        '<code>optimize-transparency</code>' methods but may be expanded to
        include other optimization methods as they are developed. </td>
  </tr>

  <tr>
    <td>optimize-frame</td>
    <td>Optimize a coalesced animation, into GIF animation by
        reducing the number of pixels per frame as much as possible by
        attempting to pick the best layer disposal method to use, while ensuring
        the result will continue to animate properly. </td>
  </tr>

  <tr><td></td><td> There is no guarantee that the best optimization is found.
        But then no reasonably fast GIF optimization algorithm can do this.
        However this does seem to do better than most other GIF frame
        optimizers seen. </td>
  </tr>

  <tr>
    <td>optimize-plus</td>
    <td>As '<code>optimize-frame</code>' but attempt to improve the
        overall optimization by adding extra frames to the animation, without
        changing the final look or timing of the animation.  The frames are
        added to attempt to separate the clearing of pixels from the
        overlaying of new additional pixels from one animation frame to the
        next.  If this does not improve the optimization (for the next frame
        only), it will fall back to the results of the previous normal
        '<code>optimize-frame</code>' technique. </td>
  </tr>

  <tr><td></td><td>There is the possibility that the change in the disposal
        style will result in a worsening in the optimization of later frames,
        though this is unlikely. In other words there no guarantee that it is
        better than the normal '<code>optimize-frame</code>' technique. For some
        animations however you can get a vast improvement in the final
        animation size. </td>
  </tr>

  <tr>
    <td>optimize-transparency</td>
    <td>Given a GIF animation, replace any pixel in the sub-frame
        overlay images with transparency, if it does not change the resulting
        animation by more than the current <a href="#fuzz" >-fuzz</a> factor.
        </td>
  </tr>

  <tr><td></td><td>This should allow a existing frame optimized GIF animation
        to compress into a smaller file size due to larger areas of one
        (transparent) color rather than a pattern of multiple colors repeating
        the current disposed image of the last frame. </td>
  </tr>

  <tr>
    <td>remove-dups</td>
    <td>Remove (and merge time delays) of duplicate consecutive
        images, so as to simplify layer overlays of coalesced animations.
        </td>
  </tr>

   <tr><td></td><td>Usually this a result of using a constant time delay
        across the whole animation, or after a larger animation was split into
        smaller sub-animations.  The duplicate frames could also have been
        used as part of some frame optimization methods. </td>
  </tr>

  <tr>
    <td>remove-zero</td>
    <td>Remove any image with a zero time delay, unless ALL the
        images have a zero time delay (and is not a proper timed animation, a
        warning is then issued). </td>
  </tr>

  <tr><td></td><td>In a GIF animation, such images are usually frames which
        provide partial intermediary updates between the frames that are
        actually displayed to users.  These frames are usually added for
        improved frame optimization in GIF animations. </td>
  </tr>

  <tr>
    <td>trim-bounds</td>
    <td>Find the bounds of all the images in the current
        image sequence, then adjust the offsets so all images are contained on
        a minimal positive canvas. None of the image data is modified or
        merged, only the individual image virtual canvas size and offset.
        All the images is given the same canvas size, and and will have
        a positive offset, but will remain in the same position relative to
        each other. As a result of the minimal canvas size at least one image
        will touch every edge of that canvas.  The image data touching those
        edges however may be transparent.  </td>
  </tr>

  <tr><td></td><td>The result is much like if you used 'merge' followed by a
        <a href="#repage" >+repage</a> option, except that all the images
        have been kept separate.  If 'flatten' is used after using
        'trim-bounds' you will get the same result.  </td>
  </tr>

  </tbody>
</table>

<p>To print a complete list of layer types, use <a href="#list">-list layers</a>.</p>

<p>The operators <a href="#coalesce" >-coalesce</a>, <a href="#deconstruct"
>-deconstruct</a>, <a href="#flatten" >-flatten</a>, and <a href="#mosaic"
>-mosaic</a> are only aliases for the above methods and may be depreciated in
the future.  Also see  <a href="#page" >-page</a>,  <a href="#repage"
>-repage</a> operators, the <a href="#compose" >-compose</a> setting, and the
GIF <a href="#dispose" >-dispose</a> and  <a href="#delay" >-delay</a>
settings. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="level"></a>-level <var>black_point</var>{,<var>white_point</var>}{<var>%</var>}{,<var>gamma</var>}</h3>
</div>

<p class="magick-description">adjust the level of image channels.</p>

<p>Given one, two or three values delimited with commas: black-point,
white-point, gamma (for example: 10,250,1.0 or 2%,98%,0.5). The black and
white points range from 0 to <var>QuantumRange</var>, or from 0 to
100%; if the white point is omitted it is set to (<var>QuantumRange</var> - black_point), so as to center contrast changes.
If a <code>%</code> sign is present anywhere in the string, both black and white
points are percentages of the full color range.  Gamma will do a <a
href="#gamma">-gamma</a> adjustment of the values.  If it is omitted, the
default of 1.0 (no gamma correction) is assumed.</p>

<p>In normal usage (<code>-level</code>) the image values are stretched so that
the given '<code>black_point</code>' value in the original image is set to zero
(or black), while the given '<code>white_point</code>' value is set to <var>QuantumRange</var> (or white).  This provides you with direct
contrast adjustments to the image.  The '<code>gamma</code>' of the resulting
image will then be adjusted. </p>

<p>From ImageMagick v6.4.1-9 using the plus form of the operator
(<code>+level</code>) or adding the special '!' flag anywhere in the argument
list, will cause the operator to do the reverse of the level adjustment.  That
is a zero, or <var>QuantumRange</var> value (black, and white, resp.)
in the original image, is adjusted to the given level values, allowing you to
de-contrast, or compress the channel values within the image. The
'<code>gamma</code>' is adjusted before the level adjustment to de-contrast the
image is made. </p>

<p>Only the channels defined by the current <a href="#channel">-channel</a>
setting are adjusted (defaults to RGB color channels only), allowing you to
limit the effect of this operator. </p>

<p>Please note that the transparency channel is treated as 'matte'
values (0 is opaque) and not as 'alpha' values (0 is transparent).</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="level-colors"></a>-level-colors {<var>black_color</var>}{,}{<var>white_color</var>}</h3>
</div>

<p class="magick-description">adjust the level of an image using the provided dash separated colors.</p>

<p>This function is exactly like <a href="#level">-level</a>, except that the
value value for each color channel is determined by the
'<code>black_color</code>' and '<code>white_color</code>' colors given (as
described under the <a href="#fill">-fill</a> option). </p>

<p>This effectually means the colors provided to <code>-level-colors</code>
is mapped to become 'black' and 'white' respectively, with all the other
colors linearly adjusted (or clipped) to match that change. Each channel is
adjusted separately using the channel values of the colors specified. </p>

<p>On the other hand the plus form of the operator (<code>+level-colors</code>)
will map the image color 'black' and 'white' to the given colors
respectively, resulting in a gradient (de-contrasting) tint of the image to
those colors. This can also be used to convert a plain grayscale image into a
one using the gradient of colors specified. </p>

<p>By supplying a single color with a comma separator either before or after
that color, will just replace the respective 'black' or 'white' point
respectively.  But if no comma separator is provided, the given color is
used for both the black and white color points, making the operator either
threshold the images around that color (- form) or set all colors to that
color (+ form). </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="limit"></a>-limit <var>type value</var></h3>
</div>

<p class="magick-description">Set the pixel cache resource limit.</p>

<p>Choose from: <code>width</code>, <code>height</code>, <code>area</code>, <code>memory</code>, <code>map</code>, <code>disk</code>, <code>file</code>, <code>thread</code>,  <code>throttle</code>, or <code>time</code>.</p>

<p>The value for <code>file</code> is in number of files. The other limits are
in bytes. Define arguments for the memory, map, area, and disk resource limits
with SI prefixes (.e.g 100MB).</p>

<p>By default the limits are 768 files, 3GB of image area, 1.5GiB memory, 3GiB
memory map, and 18.45EB of disk.  These limits are adjusted relative to the
available resources on your computer if this information is available.   When
any limit is reached, ImageMagick fails in some fashion but attempts to take
compensating actions, if possible. For example, the following limits
memory:</p>

<pre><code>
-limit memory 32MiB -limit map 64MiB
</code></pre>

<p>Use <a href="#list">-list resource</a> to list the current limits. For example, our system shows these limits:</p>

<pre><code>
-> identify -list resource
Resource limits:
  Width: 100MP
  Height: 100MP
  Area: 25.181GB
  Memory: 11.726GiB
  Map: 23.452GiB
  Disk: unlimited
  File: 768
  Thread: 12
  Throttle: 0
  Time: unlimited
</code></pre>

<p>Requests for pixel storage to keep intermediate images are satisfied by one
of three resource categories: in-memory pool, memory-mapped files pool, and
disk pool (in that order) depending on the <?php option("limit");?> settings
and whether the system honors a resource request. If the total size of
allocated pixel storage in the given pool reaches the corresponding limit, the
request is passed to the next pool. Additionally, requests that exceed the
<code>area</code> limit automagically are allocated on disk.</p>

<p>To illustrate how ImageMagick utilizes resource limits, consider a typical
image resource request.  First, ImageMagick tries to allocate the pixels in
memory.  The request might be denied if the resource request exceeds the
<code>memory</code> limit or if the system does not honor the request.  If
a memory request is not honored, the pixels are allocated to disk and the file
is memory-mapped. However, if the allocation request exceeds the
<code>map</code> limit, the resource allocation goes to disk. In all cases, if
the resource request exceeds the <code>area</code> limit, the pixels are
automagically cached to disk. If the disk has a hard limit, the program
fails.</p>

<p>In most cases you simply do not need to concern yourself with resource
limits.  ImageMagick chooses reasonable defaults and most images do not tax
your computer resources.  Where limits do come in handy is when you process
images that are large or on shared systems where ImageMagick can consume all
or most of the available memory. In this case, the ImageMagick workflow slows
other processes or, in extreme cases, brings the system to a halt.  Under
these circumstances, setting limits give some assurances that the ImageMagick
workflow will not interfere with other concurrent uses of the computer.  For
example, assume you have a web interface that processes images uploaded from
the Internet.  To assure ImageMagick does not exceed 10MiB of memory you can
simply set the area limit to 10MiB:</p>

<pre><code>
-limit area 10MB
</code></pre>

<p>Now whenever a large image is processed, the pixels are automagically
cached to disk instead of memory.  This of course implies that large images
typically process very slowly, simply because pixel processing in memory can
be an order of magnitude faster than on disk.  Because your web site users
might inadvertently upload a huge image to process, you should set a disk
limit as well:</p>

<pre><code>
-limit area 10MB -limit disk 500MB
</code></pre>

<p>Here ImageMagick stops processing if an image requires more than 500MB of disk storage.</p>

<p>In addition to command-line resource limit option, resources can be set
with <a href="<?php echo $_SESSION['RelativePath']
?>/../script/resources.php#environment" >environment variables</a>. Set the
environment variables <code>MAGICK_AREA_LIMIT</code>,
<code>MAGICK_DISK_LIMIT</code>, <code>MAGICK_FILE_LIMIT</code>,
<code>MAGICK_MEMORY_LIMIT</code>, <code>MAGICK_MAP_LIMIT</code>,
<code>MAGICK_THREAD_LIMIT</code>, <code>MAGICK_TIME_LIMIT</code> for limits of
image area, disk space, open files, heap memory, memory map, number of threads
of execution, and maximum elapsed time in seconds respectively.</p>

<p> Inquisitive users can try adding <a href="#debug">-debug cache</a> to
their commands and then scouring the generated output for references to the
pixel cache, in order to determine how the pixel cache was allocated and how
resources were consumed. Advanced Unix/Linux users can pipe that output
through <code>grep memory|open|destroy|disk</code> for more readable sifting.
</p>

<p>For more about ImageMagick's use of resources, see the section <b>Cache
Storage and Resource Requirements</b> on the <a href="<?php echo
$_SESSION['RelativePath'] ?>/../script/architecture.php#cache
">Architecture</a> page.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="linear-stretch"></a>-linear-stretch <var>black-point</var><br />-linear-stretch <var>black-point</var>{x<var>white-point</var>}{<var>%</var>}</h3>
</div>

<p class="magick-description">Linear with saturation stretch.</p>

<p>This is very similar to <a href="#contrast-stretch" >-contrast-stretch</a>,
and uses a 'histogram bin' to determine the range of color values that needs to
be stretched.  However it then stretches those colors using the <a
href="#level" >-level</a> operator.</p>

<p>As such while the initial determination may have 'binning' round off
effects, the image colors are stretched mathematically, rather than using the
histogram bins.  This makes the operator more accurate. </p>

<p>note however that a <a href="#linear-stretch" >-linear-stretch</a> of
'<code>0</code>' does nothing, while a value of '<code>1</code>' does a near
perfect stretch of the color range. </p>

<p>See also <a href="#auto-level" >-auto-level</a> for a 'perfect'
normalization of mathematical images. </p>

<p>This operator is under review for re-development. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="linewidth"></a>-linewidth</h3>
</div>

<p class="magick-description">the line width for subsequent draw operations.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="liquid-rescale"></a>-liquid-rescale <var>geometry</var></h3>
</div>

<p class="magick-description">rescale image with seam-carving.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="list"></a>-list <var>type</var></h3>
</div>

<p class="magick-description">Print a list of supported arguments for various options or settings.  Choose from these list types:</p>

<pre class="pre-scrollable"><code>
Align
Alpha
Boolean
Cache
Channel
Class
ClipPath
Coder
Color
Colorspace
Command
Complex
Compose
Compress
Configure
DataType
Debug
Decoration
Delegate
Direction
Dispose
Distort
Dither
Endian
Evaluate
FillRule
Filter
Font
Format
Function
Gravity
Intensity
Intent
Interlace
Interpolate
Kernel
Layers
LineCap
LineJoin
List
Locale
LogEvent
Log
Magic
Method
Metric
Mime
Mode
Morphology
Module
Noise
Orientation
PixelIntensity
Policy
PolicyDomain
PolicyRights
Preview
Primitive
QuantumFormat
Resource
SparseColor
Statistic
Storage
Stretch
Style
Threshold
Type
Units
Validate
VirtualPixel
</code></pre>

<p>These lists vary depending on your version of ImageMagick. Use "<code>-list
list</code>" to get a complete listing of all the "<code>-list</code>" arguments
available:</p>

<pre><code>
identify -list list
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="log"></a>-log <var>string</var></h3>
</div>

<p class="magick-description">Specify format for debug log.</p>

<p>This option specifies the format for the log printed when the <a
href="#debug">-debug</a> option is active.</p>

<p>You can display the following components by embedding special format
characters:</p>

<dl class="row">
<dt class="col-md-4">%d</dt><dd class="col-md-8">domain</dd>
<dt class="col-md-4">%e</dt><dd class="col-md-8">event</dd>
<dt class="col-md-4">%f</dt><dd class="col-md-8">function</dd>
<dt class="col-md-4">%l</dt><dd class="col-md-8">line</dd>
<dt class="col-md-4">%m</dt><dd class="col-md-8">module</dd>
<dt class="col-md-4">%p</dt><dd class="col-md-8">process ID</dd>
<dt class="col-md-4">%r</dt><dd class="col-md-8">real CPU time</dd>
<dt class="col-md-4">%t</dt><dd class="col-md-8">wall clock time</dd>
<dt class="col-md-4">%u</dt><dd class="col-md-8">user CPU time</dd>
<dt class="col-md-4">%%</dt><dd class="col-md-8">percent sign</dd>
<dt class="col-md-4">\n</dt><dd class="col-md-8">newline</dd>
<dt class="col-md-4">\r</dt><dd class="col-md-8">carriage return</dd>
</dl>

<p>For example:</p>

<pre><code>
convert -debug coders -log "%u %m:%l %e" in.gif out.png
</code></pre>

<p>The default behavior is to print all of the components.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="loop"></a>-loop <var>iterations</var></h3>
</div>

<p class="magick-description">add Netscape loop extension to your GIF animation.</p>

<p>Set iterations to zero to repeat the animation an infinite number of times,
otherwise the animation repeats itself up to <var>iterations</var>
times.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="lowlight-color"></a>-lowlight-color <var>color</var></h3>
</div>

<p class="magick-description">when comparing images, de-emphasize pixel differences with this color.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="magnify"></a>-magnify</h3>
</div>

<p class="magick-description">double the size of the image with pixel art scaling.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="map"></a>-map <var>type</var></h3>
</div>

<p class="magick-description">Display image using this <var>type</var>.</p>

<p>Choose from these <var>Standard Colormap</var> types:</p>

<pre><code>
best
default
gray
red
green
blue
</code></pre>

<p>The <var>X server</var> must support the <var>Standard
Colormap</var> you choose, otherwise an error occurs.  Use <code>list</code> as
the type and <code>display</code> searches the list of colormap types in
<code>top-to-bottom</code> order until one is located. See <var>xstdcmap(1)</var> for one way of creating Standard Colormaps.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="map_stream_"></a>-map <var>components</var></h3>
</div>

<p class="magick-description">pixel map.</p>

<p>Here are the valid components of a map:</p>

<dl class="row">
<dt class="col-md-4">r</dt><dd class="col-md-8">  red pixel component</dd>
<dt class="col-md-4">g</dt><dd class="col-md-8">  green pixel component</dd>
<dt class="col-md-4">b</dt><dd class="col-md-8">  blue pixel component</dd>
<dt class="col-md-4">a</dt><dd class="col-md-8">  alpha pixel component (0 is transparent)</dd>
<dt class="col-md-4">o</dt><dd class="col-md-8">  opacity pixel component (0 is opaque)</dd>
<dt class="col-md-4">i</dt><dd class="col-md-8">  grayscale intensity pixel component</dd>
<dt class="col-md-4">c</dt><dd class="col-md-8">  cyan pixel component</dd>
<dt class="col-md-4">m</dt><dd class="col-md-8">  magenta pixel component</dd>
<dt class="col-md-4">y</dt><dd class="col-md-8">  yellow pixel component</dd>
<dt class="col-md-4">k</dt><dd class="col-md-8">  black pixel component</dd>
<dt class="col-md-4">p</dt><dd class="col-md-8">  pad component (always 0)</dd>
</dl>

<p>You can specify as many of these components as needed in any order (e.g.
bgr).  The components can repeat as well (e.g. rgbr).</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="mattecolor"></a>-mattecolor <var>color</var></h3>
</div>

<p class="magick-description">Specify the color to be used with the <a href="#frame">-frame</a> option.</p>

<p>The color is specified using the format described under the <a href="#fill">-fill</a> option.</p>

<p>The default matte color is <code>#BDBDBD</code>, <span
style="background-color: #bdbdbd;">this shade of gray</span>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="maximum"></a>-maximum</h3>
</div>

<p class="magick-description">return the maximum intensity of an image sequence.</p>

<p>Select the 'maximum' value from all the surrounding pixels. </p>

<p>This is legacy option from the <a href="#statistic" >method</a> of the same
name. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="median"></a>-median <var>geometry</var></h3>
</div>

<p class="magick-description">apply a median filter to the image.</p>

<p>Select the 'middle' value from all the surrounding pixels. </p>

<p>This is legacy option from the <a href="#statistic" >method</a> of the same
name. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="mean-shift"></a>-mean-shift <var>width</var>x<var>height</var>{<var>+distance</var>{%}</h3>
</div>

<p class="magick-description">image noise removal and color reduction/segmentation (e.g. -mean-shift 7x7+10%).</p>

<p><var>width</var>x<var>height</var> is the window size and <var>distance</var> is the color distance measured in the range 0 to 1 or 0 to 100%</p>

<p>The mean shift algorithm is iterative and thus slower the larger the window size. For each pixel, it gets all the pixels in the window centered at the pixel and excludes those that are outside the <var>radius=sqrt((width-1)(height-1)/4)</var> surrounding the pixel. From those pixels, it finds which of them are within the specified squared color distance from the current mean. It then computes a new x,y centroid from those coordinates and a new mean. This new x,y centroid is used as the center for a new window. This process is iterated until it converges and the final mean is then used to replace the original pixel value. It repeats this process for the next pixel, etc, until it processes all pixels in the image. Results are better when using other colorspaces rather than RGB. Recommend YIQ, YUV or YCbCr, which seem to give equivalent results.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="metric"></a>-metric <var>type</var></h3>
</div>

<p class="magick-description">Output to STDERR a measure of the differences between images according to the <var>type</var> given metric.</p>

<p>Choose from:</p>

<dl class="row">
<dt class="col-md-4">AE</dt><dd class="col-md-8">    absolute error count, number of different pixels (-fuzz effected)</dd>
<dt class="col-md-4">FUZZ</dt><dd class="col-md-8">  mean color distance</dd>
<dt class="col-md-4">MAE</dt><dd class="col-md-8">   mean absolute error (normalized), average channel error distance</dd>
<dt class="col-md-4">MEPP</dt><dd class="col-md-8">  mean error per pixel (normalized mean error, normalized peak error)</dd>
<dt class="col-md-4">MSE</dt><dd class="col-md-8">   mean error squared, average of the channel error squared</dd>
<dt class="col-md-4">NCC</dt><dd class="col-md-8">   normalized cross correlation</dd>
<dt class="col-md-4">PAE</dt><dd class="col-md-8">   peak absolute (normalized peak absolute)</dd>
<dt class="col-md-4">PHASH</dt><dd class="col-md-8"> perceptual hash for the sRGB and HCLp colorspaces.  Specify an alternative colorspace with <code>-define phash:colorspaces=<var>colorspace,colorspace,...</var></code></dd>
<dt class="col-md-4">PSNR</dt><dd class="col-md-8">  peak signal to noise ratio</dd>
<dt class="col-md-4">RMSE</dt><dd class="col-md-8">  root mean squared (normalized root mean squared)</dd>
</dl>

<p>Control the '<code>AE</code>', or absolute count of pixels that are different,
with the <a href="#fuzz" >-fuzz</a> factor (ignore pixels which
only changed by a small amount).  Use '<code>PAE</code>' to find the
size of the <a href="#fuzz" >-fuzz</a> factor needed to make all pixels
'similar', while '<code>MAE</code>' determines the factor needed
for about half the pixels to be similar. </p>

<p>The '<code>MEPP</code>' metric returns three different metrics
('<code>MAE</code>', '<code>MAE</code>' normalized, and '<code>PAE</code>'
normalized) from a single comparison run. </p>

<p>To print a complete list of metrics, use the <a href="#list">-list
metric</a> option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="minimum"></a>-minimum</h3>
</div>

<p class="magick-description">return the minimum intensity of an image sequence.</p>

<p>Select the 'minimal' value from all the surrounding pixels. </p>

<p>This is legacy option from the <a href="#statistic" >method</a> of the same
name. </p>



<div style="margin: auto;">
  <h3 class="magick-header"><a id="mode"></a>-mode <var>geometry</var></h3>
</div>

<p class="magick-description">make each pixel the \'predominant color\' of the neighborhood.'</p>

<div style="margin: auto;">
  <h3 class="magick-header">-mode <var>value</var></h3>
</div>

<p class="magick-description">Mode of operation.</p>

<p>Choose the <var>value</var> from these styles: <code>Frame,
Unframe, or Concatenate</code></p>

<p>Use the <a href="#list" >-list</a> option with a '<code>Mode</code>' argument
for a list of <a href="#mode" >-mode</a> arguments available in your
ImageMagick installation.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="modulate"></a>-modulate <var>brightness</var>[,<var>saturation</var>,<var>hue</var>]</h3>
</div>

<p class="magick-description">Vary the <var>brightness</var>, <var>saturation</var>, and <var>hue</var> of an image.</p>

<p>The arguments are given as a percentages of variation. A value of 100 means
no change, and any missing values are taken to mean 100.</p>

<p>The <var>brightness</var> is a multiplier of the overall
brightness of the image, so 0 means pure black, 50 is half as bright, 200 is
twice as bright. To invert its meaning <a href="#negate">-negate</a> the image
before and after. </p>

<p>The <var>saturation</var> controls the amount of color in an
image. For example, 0 produce a grayscale image, while a large value such as
200 produce a very colorful, 'cartoonish' color.</p>

<p>The <var>hue</var> argument causes a "rotation" of the colors
within the image by the amount specified. For example, 50 results in
a counter-clockwise rotation of 90, mapping red shades to purple, and so on.
A value of either 0 or 200 results in a complete 180 degree rotation of the
image. Using a value of 300 is a 360 degree rotation resulting in no change to
the original image. </p>

<p>For example, to increase the color brightness by 20% and decrease the color
saturation by 10% and leave the hue unchanged, use <a
href="#modulate">-modulate 120,90</a>.</p>

<p>Use <a href="#set">-set</a> attribute of '<code
>option:modulate:colorspace</code>' to specify which colorspace to
modulate.  Choose from <code>HCL</code>, <code>HCLp</code>, <code>HSB</code>, <code>HSI</code>, <code>HSL</code> (the default), <code>HSV</code>, <code>HWB</code>, or <code>LCH</code> (LCHuv).  For example,</p>

<pre><code>
convert image.png -set option:modulate:colorspace hsb -modulate 120,90 modulate.png
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="moments"></a>-moments</h3>
</div>

<p class="magick-description">report image moments and perceptual hash.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="monitor"></a>-monitor</h3>
</div>

<p class="magick-description">monitor progress.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="monochrome"></a>-monochrome</h3>
</div>

<p class="magick-description">transform the image to black and white.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="morph"></a>-morph <var>frames</var></h3>
</div>

<p class="magick-description">morphs an image sequence.</p>

<p>Both the image pixels and size are linearly interpolated to give the
appearance of a metamorphosis from one image to the next, over all the images
in the current image list. The added images are the equivalent of a <a
href="#blend">-blend</a> composition. The <var>frames</var>
argument determine how many images to interpolate between each image. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="morphology"></a>-morphology</h3>
  <h3 class="magick-header">-morphology <var>method</var>  <var>kernel</var></h3>
</div>

<p class="magick-description">apply a morphology method to the image.</p>

<p>Until I get around to writing an option summary for this, see <a
href="https://www.imagemagick.org/Usage/morphology/" >IM Usage Examples,
Morphology</a>. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="mosaic"></a>-mosaic</h3>
</div>

<p class="magick-description">an simple alias for the <a href="#layers" >-layers</a> method "mosaic"</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="motion-blur"></a>-motion-blur <var>radius</var><br />-motion-blur <var>radius</var>x<var>sigma</var>+<var>angle</var></h3>
</div>

<p class="magick-description">simulate motion blur.</p>

<p>Blur with the given radius, standard deviation (sigma), and angle.   The
angle given is the angle toward which the image is blurred.  That is the
direction people would consider the object is coming from. </p>

<p>Note that the blur is not uniform distribution, giving the motion a
definite sense of direction of movement. </p>

<p>The <a href="#virtual-pixel">-virtual-pixel</a> setting will determine how
pixels which are outside the image proper are blurred into the final result.
</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="name"></a>-name</h3>
</div>

<p class="magick-description">name an image.</p>
<div style="margin: auto;">
  <h3 class="magick-header"><a id="negate"></a>-negate</h3>
</div>

<p class="magick-description">replace each pixel with its complementary color.</p>

<p>The red, green, and blue intensities of an image are negated. White becomes
black, yellow becomes blue, etc.  Use <a href="#negate">+negate</a> to only
negate the grayscale pixels of the image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="noise"></a>-noise <var>geometry</var><br/>
  +noise <var>type</var></h3>
</div>

<p class="magick-description">Add or reduce noise in an image.</p>

<p>The principal function of noise peak elimination filter is to smooth the
objects within an image without losing edge information and without creating
undesired structures.  The central idea of the algorithm is to replace a pixel
with its next neighbor in value within a pixel window, if this pixel has been
found to be noise. A pixel is defined as noise if and only if this pixel is
a maximum or minimum within the pixel window.</p>

<p>Use <code><a href="#noise">-noise</a> <var>radius</var></code> to
specify the width of the neighborhood when reducing noise.  This is equivalent
to using a <code><a href="#statistic" >-statistic</a> NonPeak</code> operation,
which should be used in preference.</p>

<p>Use <a href="#noise">+noise</a> followed by a noise <var>type</var> to add noise to an image. Choose from these noise
types:</p>

<pre><code>
Gaussian
Impulse
Laplacian
Multiplicative
Poisson
Random
Uniform
</code></pre>

<p>The amount of noise added can be controlled by the <code><a
href="#attenuate" >-attenuate</a></code> setting. If unset the value is
equivalent to 1.0, or a maximum noise addition.</p>

<p>Note that Random will replace the image with noise rather than add noise to the image. Use Uniform, if you wish to add random noise to the image.</p>

<p>To print a complete list of noises, use the <a href="#list">-list noise</a> option.</p>

<p>Also see the <a href="#evaluate">-evaluate</a> noise functions that allows
the use of a controlling value to specify the amount of noise that should be
added to an image. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="normalize"></a>-normalize</h3>
</div>

<p class="magick-description">Increase the contrast in an image by <var>stretching</var> the range of intensity values.</p>

<p>The intensity values are stretched to cover the entire range of possible
values. While doing so, black-out at most <var>2%</var> of the pixels and
white-out at most <var>1%</var> of the pixels.</p>

<p>Note that as of ImageMagick 6.4.7-0, <a href="#normalize" >-normalize</a>
is equivalent to <a href="#contrast-stretch" >-contrast-stretch 2%x1%</a>.
(Before this version, it was equivalent to <a href="#contrast-stretch"
>-contrast-stretch 2%x99%</a>).</p>

<p>All the channels are normalized in concert by the same amount so as to
preserve color integrity, when the default <a href="#channel" >+channel</a>
setting is in use.  Specifying any other <a href="#channel" >-channel</a>
setting will normalize the RGB channels independently.</p>

<p>See  <a href="#contrast-stretch" >-contrast-stretch</a> for more details.
Also see <a href="#auto-level" >-auto-level</a> for a 'perfect' normalization
that is better suited to mathematically generated images. </p>

<p>This operator is under review for re-development. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="opaque"></a>-opaque <var>color</var></h3>
</div>

<p class="magick-description">change this color to the fill color within the image.</p>

<p>The <var>color</var> argument is defined using the format
described under the <a href="#fill" >-fill</a> option.  The <a href="#fuzz"
>-fuzz</a> setting can be used to match and replace colors similar to the one
given.</p>

<p>Use <a href="#opaque">+opaque</a> to paint any pixel that does not match
the target color. </p>

<p>The <a href="#transparent">-transparent</a>  operator is exactly the same
as <a href="#opaque" >-opaque</a> but replaces the matching color with
transparency rather than the current <a href="#fill">-fill</a> color setting.
To ensure that it can do this it also ensures that the image has an alpha
channel enabled, as per "<code><a href="#alpha" >-alpha</a> set</code>", for
the new transparent colors, and does not require you to modify the <a
href="#channel">-channel</a> to enable alpha channel handling. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="ordered-dither"></a>-ordered-dither <var>threshold_map</var>{,<var>level</var>...}</h3>
</div>

<p class="magick-description">dither the image using a pre-defined  ordered dither <var>threshold map</var> specified, and a uniform color map with the
given number of <var>levels</var> per color channel.</p>

<p>You can choose from these standard threshold maps:</p>

<pre class="pre-scrollable"><code>
threshold   1x1   Threshold 1x1 (non-dither)
checks      2x1   Checkerboard 2x1 (dither)
o2x2        2x2   Ordered 2x2 (dispersed)
o3x3        3x3   Ordered 3x3 (dispersed)
o4x4        4x4   Ordered 4x4 (dispersed)
o8x8        8x8   Ordered 8x8 (dispersed)
h3x4a       4x1   Halftone 4x4 (angled)
h6x6a       6x1   Halftone 6x6 (angled)
h8x8a       8x1   Halftone 8x8 (angled)
h3x4o             Halftone 4x4 (orthogonal)
h6x6o             Halftone 6x6 (orthogonal)
h8x8o             Halftone 8x8 (orthogonal)
h36x16o           Halftone 16x16 (orthogonal)
c5x5b       c5x5  Circles 5x5 (black)
c5x5w             Circles 5x5 (white)
c6x6b       c6x6  Circles 6x6 (black)
c6x6w             Circles 6x6 (white)
c7x7b       c7x7  Circles 7x7 (black)
c7x7w             Circles 7x7 (white)
</code></pre>

<p> The <code>threshold</code> generated a simple 50% threshold of the image.
This could be used with <var >level</var> to do the equivalent of <a
href="#posterize" >-posterize</a> to reduce an image to basic primary colors.
</p>

<p>The <code>checks</code> pattern produces a 3 level checkerboard  dither
pattern. That is a grayscale will become a pattern of solid black, solid
white, and  mid-tone colors into a checkerboard pattern of black and white.
</p>

<p>You can define your own <var >threshold map</var> for ordered
dithering and halftoning your images, in either personal or system
<code>thresholds.xml</code> XML file. See <a href="resources.php" >Resources</a>
for more details of configuration files. </p>

<p>To print a complete list of the thresholds that have been defined, use the
<a href="#list" >-list threshold</a> option.</p>

<p>Note that at this time the same threshold dithering map is used for all
color channels, no attempt is made to offset or rotate the map for different
channels is made, to create an offset printing effect. Also as the maps are
simple threshold levels, the halftone and circle maps will create incomplete
circles along the edges of a colored area. Also all the effects are purely
on/off boolean effects, without anti-aliasing to make the circles smooth
looking. Large dots can be made to look better with a small amount of blurring
after being created. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="orient"></a>-orient <var>image orientation</var></h3>
</div>

<p class="magick-description">specify orientation of a digital camera image.</p>

<p>Choose from these orientations:</p>

<pre><code>
bottom-left    right-top
bottom-right   top-left
left-bottom    top-right
left-top       undefined
right-bottom
</code></pre>

<p>To print a complete list of orientations, use the <a href="#list" >-list
orientation</a> option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="page"></a>-page <var>geometry</var><br/>
  -page <var>media</var>[<var>offset</var>][{<var>^!&lt;&gt;</var>}]<br/>
  +page
  </h3>
</div>

<p class="magick-description">Set the size and location of an image on the larger virtual canvas.</p>

<p><?php seeGeometry();?></p>

<p>For convenience you can specify the page size using <var>media</var> (see below). Offsets can then be added as with other
<var>geometry</var> arguments (e.g. <a
href="#page">-page</a> <code>Letter+43+43</code>).</p>

<p>Use <var>media</var> as shorthand to specify the dimensions (<var>width</var>x<var>height</var>) of the <var>PostScript</var> page in dots per inch or a TEXT page in pixels.
The choices for a PostScript page are:</p>

<dl class="row">
<dt class="col-md-4"> 11x17      </dt> <dd class="col-md-8">  792 x 1224</dd> 
<dt class="col-md-4"> Ledger     </dt> <dd class="col-md-8"> 1224 x  792</dd> 
<dt class="col-md-4"> Legal      </dt> <dd class="col-md-8">  612 x 1008</dd> 
<dt class="col-md-4"> Letter     </dt> <dd class="col-md-8">  612 x  792</dd> 
<dt class="col-md-4"> LetterSmall</dt> <dd class="col-md-8">  612 x  792</dd> 
<dt class="col-md-4"> ArchE      </dt> <dd class="col-md-8"> 2592 x 3456</dd> 
<dt class="col-md-4"> ArchD      </dt> <dd class="col-md-8"> 1728 x 2592</dd> 
<dt class="col-md-4"> ArchC      </dt> <dd class="col-md-8"> 1296 x 1728</dd> 
<dt class="col-md-4"> ArchB      </dt> <dd class="col-md-8">  864 x 1296</dd> 
<dt class="col-md-4"> ArchA      </dt> <dd class="col-md-8">  648 x  864</dd> 
<dt class="col-md-4"> A0         </dt> <dd class="col-md-8"> 2380 x 3368</dd> 
<dt class="col-md-4"> A1         </dt> <dd class="col-md-8"> 1684 x 2380</dd> 
<dt class="col-md-4"> A2         </dt> <dd class="col-md-8"> 1190 x 1684</dd> 
<dt class="col-md-4"> A3         </dt> <dd class="col-md-8">  842 x 1190</dd> 
<dt class="col-md-4"> A4         </dt> <dd class="col-md-8">  595 x  842</dd> 
<dt class="col-md-4"> A4Small    </dt> <dd class="col-md-8">  595 x  842</dd> 
<dt class="col-md-4"> A5         </dt> <dd class="col-md-8">  421 x  595</dd> 
<dt class="col-md-4"> A6         </dt> <dd class="col-md-8">  297 x  421</dd> 
<dt class="col-md-4"> A7         </dt> <dd class="col-md-8">  210 x  297</dd> 
<dt class="col-md-4"> A8         </dt> <dd class="col-md-8">  148 x  210</dd> 
<dt class="col-md-4"> A9         </dt> <dd class="col-md-8">  105 x  148</dd> 
<dt class="col-md-4"> A10        </dt> <dd class="col-md-8">   74 x  105</dd> 
<dt class="col-md-4"> B0         </dt> <dd class="col-md-8"> 2836 x 4008</dd> 
<dt class="col-md-4"> B1         </dt> <dd class="col-md-8"> 2004 x 2836</dd> 
<dt class="col-md-4"> B2         </dt> <dd class="col-md-8"> 1418 x 2004</dd> 
<dt class="col-md-4"> B3         </dt> <dd class="col-md-8"> 1002 x 1418</dd> 
<dt class="col-md-4"> B4         </dt> <dd class="col-md-8">  709 x 1002</dd> 
<dt class="col-md-4"> B5         </dt> <dd class="col-md-8">  501 x  709</dd> 
<dt class="col-md-4"> C0         </dt> <dd class="col-md-8"> 2600 x 3677</dd> 
<dt class="col-md-4"> C1         </dt> <dd class="col-md-8"> 1837 x 2600</dd> 
<dt class="col-md-4"> C2         </dt> <dd class="col-md-8"> 1298 x 1837</dd> 
<dt class="col-md-4"> C3         </dt> <dd class="col-md-8">  918 x 1298</dd> 
<dt class="col-md-4"> C4         </dt> <dd class="col-md-8">  649 x  918</dd> 
<dt class="col-md-4"> C5         </dt> <dd class="col-md-8">  459 x  649</dd> 
<dt class="col-md-4"> C6         </dt> <dd class="col-md-8">  323 x  459</dd> 
<dt class="col-md-4"> Flsa       </dt> <dd class="col-md-8">  612 x  936</dd> 
<dt class="col-md-4"> Flse       </dt> <dd class="col-md-8">  612 x  936</dd> 
<dt class="col-md-4"> HalfLetter </dt> <dd class="col-md-8">  396 x  612</dd> 
</dl>

<p>This option is also used to place subimages when writing to a multi-image
format that supports offsets, such as GIF89 and MNG. When used for this
purpose the offsets are always measured from the top left corner of the canvas
and are not affected by the <a href="#gravity">-gravity</a> option. To
position a GIF or MNG image, use <a href="#page">-page</a><var>{+-}x{+-}y</var> (e.g.  -page +100+200). When writing to a MNG
file, a <a href="#page">-page</a> option appearing ahead of the first image in
the sequence with nonzero width and height defines the width and height values
that are written in the <code>MHDR</code> chunk.  Otherwise, the MNG width and
height are computed from the bounding box that contains all images in the
sequence. When writing a GIF89 file, only the bounding box method is used to
determine its dimensions.</p>

<p>For a PostScript page, the image is sized as in <a
href="#geometry">-geometry</a> but positioned relative to the <var>lower
left-hand corner</var> of the page by {+-}<code>x</code><var>offset</var>{+-}<code>y</code> <var>offset</var>. Use <a
href="#page">-page 612x792</a>, for example, to center the image within the
page. If the image size exceeds the PostScript page, it is reduced to fit the
page. The default gravity for the <a href="#page">-page</a> option is <var>NorthWest</var>, i.e., positive <code>x</code> and <code>y</code> <var>offset</var> are measured rightward and downward from the top left
corner of the page, unless the <a href="#gravity">-gravity</a> option is
present with a value other than <var>NorthWest</var>.</p>

<p>The default page dimensions for a TEXT image is 612x792.</p>

<p>This option is used in concert with <a href="#density">-density</a>.</p>

<p>Use <a href="#page">+page</a> to remove the page settings for an image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="paint"></a>-paint <var>radius</var></h3>
</div>

<p class="magick-description">simulate an oil painting.</p>

<p>Each pixel is replaced by the most frequent color in a circular
neighborhood whose width is specified with <var>radius</var>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="path"></a>-path <var>path</var></h3></div>

<p class="magick-description">write images to this path on disk.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="pause_animate_"></a>-pause <var>seconds</var></h3>
</div>

<p class="magick-description">Pause between animation loops</p>

<p>Pause for the specified number of seconds before repeating the animation.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="pause_import_"></a>-pause <var>seconds</var></h3>
</div>

<p class="magick-description">Pause between snapshots.</p>

<p>Pause for the specified number of seconds before taking the next snapshot.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="perceptible"></a>-perceptible <var>epsilon</var></h3>
</div>

<p class="magick-description">set each pixel whose value is less than |<var>epsilon</var>| to <var>-epsilon</var> or <var>epsilon</var> (whichever is closer) otherwise the pixel value remains unchanged.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="ping"></a>-ping</h3>
</div>

<p class="magick-description">efficiently determine image characteristics.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="pointsize"></a>-pointsize <var>value</var></h3>
</div>

<p class="magick-description">pointsize of the PostScript, OPTION1, or TrueType font.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="polaroid"></a>-polaroid <var>angle</var></h3>
</div>

<p class="magick-description">simulate a Polaroid picture.</p>

<p>Use <code>+polaroid</code> to rotate the image at a random angle between -15 and +15 degrees.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="poly"></a>-poly <var>"wt,exp ..."</var></h3>
</div>

<p class="magick-description">combines multiple images according to a weighted sum of polynomials; one floating point weight (coefficient) and one floating point polynomial exponent (power) for each image expressed as comma separated pairs.</p>

<p> The weights should typically be fractions between -1 and 1. But the sum of weights should be 1 or at least between 0 and 1 to avoid clamping in non-hdri mode at black and white.</p>

<p>The exponents may be positive, negative or zero. A negative exponent is equivalent to 1 divided by the image raised to the corresponding positive exponent. A zero exponent always produces 1 scaled by quantumrange to white, i.e. wt*white, no matter what the image.</p>

<p>The format is: <var>output = wt1*image1^exp1 + wt2*image2^exp2 </var>...</p>

<p>Some simple uses are:</p>
<ul>
<li>A weighted sum of each image provided all weights add to unity and all exponents=1. If the the weights are all equal to 1/(number of images), then this is equivalent to <a href="#profile">-evaluate-sequence</a> <var>mean</var>.</li>
<li>The sum of squares of two or more images, provided the weights are equal (and sum to 1 to avoid clamping) and the exponents equal 2.</li>
</ul>

<p>Note that one may add a constant color to the expression simply by using xc:somecolor for one of the images and specifying the desired weight and exponent equal to 0.</p>

<p>Similarly one may add white to the expression by simply using null: (or xc:white) for one of the images with the appropriate weight and exponent equal to 0.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="posterize"></a>-posterize <var>levels</var></h3>
</div>

<p class="magick-description">reduce the image to a limited number of color levels per channel.</p>

<p>Very low values of <var>levels</var>, e.g., 2, 3, 4, have the most
visible effect.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="precision"></a>-precision <var>value</var></h3>
</div>

<p class="magick-description">set the maximum number of significant digits to be printed.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="preview"></a>-preview <var>type</var></h3>
</div>

<p class="magick-description">image preview type.</p>

<p>Use this option to affect the preview operation of an image (e.g.
<code>convert file.png -preview Gamma Preview:gamma.png</code>). Choose from
these previews:</p>

<pre class="pre-scrollable"><code>
AddNoise
Blur
Brightness
Charcoal
Despeckle
Dull
EdgeDetect
Gamma
Grayscale
Hue
Implode
JPEG
OilPaint
Quantize
Raise
ReduceNoise
Roll
Rotate
Saturation
Segment
Shade
Sharpen
Shear
Solarize
Spiff
Spread
Swirl
Threshold
Wave
</code></pre>

<p>To print a complete list of previews, use the <a href="#list">-list preview</a> option.</p>

<p>The default preview is <code>JPEG</code>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="print"></a>-print <var>string</var></h3>
</div>

<p class="magick-description">interpret string and print to console.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="process"></a>-process <var>command</var></h3>
</div>

<p class="magick-description">process the image with a custom image filter.</p>

<p>The command arguments has the form <code>"module arg1 arg2 arg3 ...
argN"</code> where <code>module</code> is the name of the module to invoke (e.g.
"Analyze") and arg1 arg2 arg3 ... argN are an arbitrary number of arguments to
pass to the process module.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="profile"></a>-profile <var>filename</var><br/>
  +profile <var>profile_name</var></h3>
</div>

<p class="magick-description">Manage ICM, IPTC, or generic profiles in an image.</p>

<p>Using <a href="#profile">-profile</a> <var>filename</var> adds an
ICM (ICC color management), IPTC (newswire information), or a generic profile
to the image.</p>

<p>Use <a href="#profile">+profile <var>profile_name</var></a> to
remove the indicated profile. ImageMagick uses standard filename globbing, so
wildcard expressions may be used to remove more than one profile.  Here we
remove all profiles from the image except for the XMP profile:  <code>+profile
"!xmp,*"</code>. </p>

<p>Use <code>identify -verbose</code> to find out which profiles are in the
image file. Use <a href="#strip">-strip</a> to remove all profiles (and
comments).</p>

<p>To extract a profile, the <a href="#profile">-profile</a> option is not
used. Instead, simply write the file to an image format such as <var>APP1, 8BIM, ICM,</var> or <var>IPTC</var>.</p>

<p>For example, to extract the Exif data (which is stored in JPEG files in the
<var>APP1</var> profile), use.</p>

<pre><code>
convert cockatoo.jpg profile.exif
</code></pre>

<p>It is important to note that results may depend on whether or not the
original image already has an included profile. Also, keep in mind that <a
href="#profile">-profile</a> is an "operator" (as opposed to a "setting") and
therefore a conversion is made each time it is encountered, in order, in the
command-line. For instance, in the following example, if the original image is
CMYK with profile, a CMYK-CMYK-RGB conversion results.</p>

<pre><code>
convert CMYK.tif -profile "CMYK.icc" -profile "RGB.icc" RGB.tiff
</code></pre>

<p>Furthermore, since ICC profiles are not necessarily symmetric, extra
conversion steps can yield unwanted results.  CMYK profiles are often very
asymmetric since they involve 3−&gt;4 and 4−&gt;3 channel mapping.
</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="quality"></a>-quality <var>value</var></h3>
</div>

<p class="magick-description">JPEG/MIFF/PNG compression level.</p>

<p>For the JPEG and MPEG image formats, quality is 1 (lowest image quality and
highest compression) to 100 (best quality but least effective compression).
The default is to use the estimated quality of your input image if it can
be determined, otherwise 92. When the quality is greater than 90, then the
chroma channels are not downsampled.
Use the <a href="#sampling-factor">-sampling-factor</a> option to specify the
factors for chroma downsampling.</p>

<p>For the JPEG-2000 image format, quality is mapped using a non-linear
equation to the compression ratio required by the Jasper library. This
non-linear equation is intended to loosely approximate the quality provided by
the JPEG v1 format. The default quality value 100, a request for non-lossy
compression.  A quality of 75 results in a request for 16:1 compression.</p>

<p>For the MNG and PNG image formats, the quality value sets the zlib
compression level (quality / 10) and filter-type (quality % 10).  The default
PNG "quality" is 75, which means compression level 7 with adaptive PNG
filtering, unless the image has a color map, in which case it means
compression level 7 with no PNG filtering.</p>

<p>For compression level 0 (quality value less than 10), the Huffman-only
strategy is used, which is fastest but not necessarily the worst
compression.</p>

<p>If filter-type is 4 or less, the specified PNG filter-type is used for
all scanlines:</p>

<dl class="row">
<dt class="col-md-4">0</dt><dd class="col-md-8">none</dd>
<dt class="col-md-4">1</dt><dd class="col-md-8">sub</dd>
<dt class="col-md-4">2</dt><dd class="col-md-8">up</dd>
<dt class="col-md-4">3</dt><dd class="col-md-8">average</dd>
<dt class="col-md-4">4</dt><dd class="col-md-8">Paeth</dd>
</dl>

<p>If filter-type is 5, adaptive filtering is used when quality is greater
than 50 and the image does not have a color map, otherwise no filtering is
used.</p>

<p>If filter-type is 6, adaptive filtering
with <var>minimum-sum-of-absolute-values</var> is used.</p>

<p>Only if the output is MNG, if filter-type is 7, the LOCO color
transformation (intrapixel differencing) and adaptive filtering
with <var>minimum-sum-of-absolute-values</var> are used.</p>

<p>If the filter-type is 8 the zlib Z_RLE compression strategy (or the
Z_HUFFMAN_ONLY strategy, when compression level is 0) is used with
adaptive PNG filtering.</p>

<p>If the filter-type is 9 the zlib Z_RLE compression strategy (or the
Z_HUFFMAN_ONLY strategy, when compression level is 0) is used with
no PNG filtering.</p>

<p>The quality setting has no effect on the appearance or signature of PNG
and MNG images, since the compression is always lossless.</p>

<p>Not all combinations of compression level, strategy, and PNG filter type
can be obtained using the -quality option.  For more precise control,
you can use the PNG:compression-level=N, PNG:compression-strategy=N, and
PNG:compression-filter=N defines, respectively, instead.
See <a href="#define">-define</a>. Values from the defines take precedence
over values from the -quality option.</p>

<p>For further information, see
the <a href="http://www.w3.org/pub/WWW/TR">PNG</a> specification.</p>

<p>For the MIFF and TIFF image formats, quality/10 is the <a href="#compress">Zip/BZip</a> compression level, which is 0 (worst but fastest compression) to 9 (best but slowest). It has no effect on the image appearance, since the compression is always lossless.</p>

<p>For the BPG image format, quality/2 is the actual BPG compression level (range from 0 to 51).</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="quantize"></a>-quantize <var>colorspace</var></h3>
</div>

<p class="magick-description">reduce colors using this colorspace.</p>

<p>This setting defines the colorspace used to sort out and reduce the number
of colors needed by an image (for later dithering) by operators such as <a
href="#colors" >-colors</a>, Note that color reduction also happens
automatically when saving images to color-limited image file formats, such as
GIF, and PNG8.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="quiet"></a>-quiet</h3>
</div>

<p class="magick-description">suppress all warning messages. Error messages are still reported.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="radial-blur"></a>-radial-blur  <var>angle</var></h3>
</div>

<p class="magick-description">Blur around the center of the image.</p>

<p>Note that this is actually a rotational blur rather than a radial and as
such actually mis-named. </p>

<p>The <a href="#virtual-pixel">-virtual-pixel</a> setting will determine how
pixels which are outside the image proper are blurred into the final result.
</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="raise"></a>-raise <var>thickness</var></h3>
</div>

<p class="magick-description">Lighten or darken image edges.</p>

<p>This will create a 3-D effect. Use <a href="#raise">-raise</a> to create
a raised effect, otherwise use <a href="#raise">+raise</a>.  </p>

<p>Unlike the similar <a href="#frame">-frame</a> option, <a
href="#raise">-raise</a> does not alter the dimensions of the image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="random-threshold"></a>-random-threshold <var>low</var>x<var>high</var></h3>
</div>

<p class="magick-description">Apply a random threshold to the image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="read-mask"></a>-read-mask
<var>filename</var></h3>
</div>

<p class="magick-description">Prevent updates to image pixels specified by the mask.</p>

<p>This the same as using a mask used for composite masking operations, with
grayscale values causing blended updates of the image the mask is attached to.
</p>

<p>Use <a href="#read-mask">+read-mask</a> to remove the mask from images.</p>

<p>Also see <a href="#clip-mask">-clip-mask</a> which work in the same way,
but with strict boolean masking. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="red-primary"></a>-red-primary <var>x,y</var></h3>
</div>

<p class="magick-description">Set the red chromaticity primary point.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="regard-warnings"></a>-regard-warnings</h3>
</div>

<p class="magick-description">Pay attention to warning messages.</p>

<p>This option causes some warnings in some image formats to be treated
as errors. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="remap"></a>-remap <var>filename</var></h3>
</div>

<p class="magick-description">Reduce the number of colors in an image to the colors used by this image.</p>

<p>If the <a href="#dither">-dither</a> setting is enabled (the default) then
the given colors are dithered over the image as necessary, otherwise the closest
color (in RGB colorspace) is selected to replace that pixel in the image. </p>

<p>As a side effect of applying a <a href="#remap">-remap</a> of colors across all
images in the current image sequence, all the images will have the same color
table.  That means that when saved to a file format such as GIF, it will use
that color table as a single common or global color table, for all the images,
without requiring extra local color tables. </p>

<p>Use <a href="#remap">+remap</a> to reduce all images in the current image
sequence to use a common color map over all the images. This equivalent to
appending all the images together (without extra background colors) and color
reducing those images using <a href="#colors">-colors</a> with a 256 color
limit, then <a href="#remap">-remap</a> those colors over the original list of
images. This ensures all the images follow a single color map. </p>

<p>If the number of colors over all the images is less than 256, then <a
href="#remap">+remap</a> should not perform any color reduction or dithering, as
no color changes are needed. In that case, its only effect is to force the use
of a global color table.  This recommended after using either <a
href="#colors">-colors</a> or <a href="#ordered-dither">-ordered-dither</a> to
reduce the number of colors in an animated image sequence. </p>

<p>Note, the remap image colormap has at most 8-bits of precision. Deeper color maps are automagically coalesced with other colors to meet this requirement.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="region"></a>-region <var>geometry</var></h3>
</div>

<p class="magick-description">Set a region in which subsequent operations apply.</p>

<p>The <var>x</var> and <var>y</var> offsets are treated
in the same manner as in <a href="#crop">-crop</a>.</p>

<p><?php seeGeometry();?></p>

<p>Use <code>+region</code> to remove any previously set regions.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="remote"></a>-remote</h3>
</div>

<p class="magick-description">perform a remote operation.</p>

<p>The only command recognized is the name of an image file to load.</p>

<p>If you have more than one <a href="<?php echo
$_SESSION['RelativePath']?>/../script/display.php">display</a> application
running simultaneously, use the <a href="#window"> window</a> option to
specify which application to control.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="render"></a>-render</h3>
</div>

<p class="magick-description">render vector operations.</p>

<p>Use <a href="#render">+render</a> to turn off rendering vector operations.
This useful when saving the result to vector formats such as MVG or SVG.</p>

<div style="margin: auto;">
<h3 class="magick-header"><a id="repage"></a>-repage <var>geometry</var></h3>
</div>

<p class="magick-description">Adjust the canvas and offset information of the image.</p>

<p>This option is like <a href="#page">-page</a> but acts as an image operator
rather than a setting.  You can separately set the canvas size or the offset
of the image on that canvas by only providing those components. </p>

<p><?php seeGeometry();?></p>

<p>If a <code>!</code> flag is given the offset given is added to the existing
offset to move the image relative to its previous position. This useful for
animation sequences. </p>

<p>A given a canvas size of zero such as '<code>0x0</code>' forces it to
recalculate the canvas size so the image (at its current offset) will appear
completely on that canvas (unless it has a negative offset).</p>

<p>Use <a href="#repage">+repage</a> to completely remove/reset the virtual
canvas meta-data from the images. </p>

<p>The <a href="#set">-set</a> '<code>page</code>' option can be used to
directly assign virtual canvas meta-data. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="resample"></a>-resample <var>horizontal</var>x<var>vertical</var></h3>
</div>

<p class="magick-description">Resample image to specified horizontal and vertical resolution.</p>

<p>Resize the image so that its rendered size remains the same as the original
at the specified target resolution. For example, if a 300 DPI image renders at
3 inches by 2 inches on a 300 DPI device, when the image has been resampled to
72 DPI, it will render at 3 inches by 2 inches on a 72 DPI device.  Note that
only a small number of image formats (e.g. JPEG, PNG, and TIFF) are capable of
storing the image resolution. For formats which do not support an image
resolution, the original resolution of the image must be specified via <a
href="#density">-density</a> on the command line prior to specifying the
resample resolution.</p>

<p>Note that Photoshop stores and obtains image resolution from a proprietary
embedded profile. If this profile exists in the image, then Photoshop will
continue to treat the image using its former resolution, ignoring the image
resolution specified in the standard file header.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="resize"></a>-resize <var>geometry</var></h3>
</div>

<p class="magick-description">Resize an image.</p>

<p><?php seeGeometry();?> Offsets, if present in the geometry string, are
ignored, and the <a href="#gravity">-gravity</a> option has no effect.</p>

<p>If the <a href="#filter">-filter</a> option
or <code>-define filter:option=value</code> precedes the <a
href="#resize">-resize</a> option, the image is resized with the specified
filter.</p>

<p>Many image processing algorithms assume your image is in a linear-light
coding.  If your image is gamma-corrected, you can remove the nonlinear gamma
correction, apply the transform, then restore it like this:</p>

<pre><code>
convert portrait.jpg -gamma .45455 -resize 25% -gamma 2.2  \
  -quality 92 passport.jpg
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="respect-parentheses"></a>-respect-parentheses</h3>
</div>

<p class="magick-description">settings remain in effect until parenthesis boundary.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="reverse"></a>-reverse</h3>
</div>

<p class="magick-description">Reverse the order of images in the current image list.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="roll"></a>-roll {<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var></h3>
</div>

<p class="magick-description">roll an image vertically or horizontally by the amount given.</p>

<p>A negative <var>x</var> offset rolls the image right-to-left.
A negative <var>y</var> offset rolls the image bottom-to-top.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="rotate"></a>-rotate <var>degrees</var>{<var>&lt;</var>}{<var>&gt;</var>}</h3>
</div>

<p class="magick-description">Apply Paeth image rotation (using shear operations) to the image.</p>

<p>Use <code>&gt;</code> to rotate the image only if its width exceeds the
height. <code>&lt;</code> rotates the image <var>only</var> if its width is less
than the height. For example, if you specify <code>-rotate "-90&gt;"</code> and
the image size is 480x640, the image is not rotated. However, if the image is
640x480, it is rotated by -90 degrees. If you use <code>&gt;</code> or
<code>&lt;</code>, enclose it in quotation marks to prevent it from being
misinterpreted as a file redirection.</p>

<p>Empty triangles in the corners, left over from rotating the image, are
filled with the <code>background</code> color. </p>

<p>See also the <a href="#distort">-distort</a> operator and specifically the
'<code>ScaleRotateTranslate</code>' distort method. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="sample"></a>-sample <var>geometry</var></h3>
</div>

<p class="magick-description">minify / magnify the image with pixel subsampling and pixel replication, respectively.</p>

<p>Change the image size simply by directly sampling the pixels original
from the image.  When magnifying, pixels are replicated in blocks.  When
minifying, pixels are sub-sampled (i.e., some rows and columns are skipped
over). </p>

<p>The results are thus equivalent to using <a href="#resize">-resize</a> with
a <a href="#filter">-filter</a> setting of <code>point</code> (nearest
neighbor), though <a href="#sample">-sample</a> is a lot faster, as it
avoids all the filter processing of the image. As such it completely ignores
the current <a href="#filter">-filter</a> setting. </p>

<p>The key feature of the <a href="#sample">-sample</a> is that no new colors
will be added to the resulting image, though some colors may disappear. </p>

<p><?php seeGeometry();?> Offsets, if present in the geometry string, are
ignored, unlike <a href="#resize">-resize</a>. </p>


<p>The actual sampling point is the middle of the sub-region being sampled.
As such a single pixel sampling of an image will take the middle pixel, (or
top-left-middle if image has even dimensions).  However the <a
href="#define">-define</a> '<code>sample:offset</code>' can be set to modify
this position some other location within each sub-region being sampled, as
a percentage offset.</p>

<p>By default this value is '<code>50</code>' for the midpoint, but could be set
to '<code>0</code>' for top-left, '<code>100</code>' for bottom-right, or with
separate X and Y offsets such as '<code>0x50</code>' for left-middle edge of
sampling sub-region.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="sampling-factor"></a>-sampling-factor <var>horizontal-factor</var>x<var>vertical-factor</var></h3>
</div>

<p class="magick-description">sampling factors used by JPEG or MPEG-2 encoder and YUV decoder/encoder.</p>

<p>This option specifies the sampling factors to be used by the JPEG encoder
for chroma downsampling. If this option is omitted, the JPEG library will use
its own default values. When reading or writing the YUV format and when
writing the M2V (MPEG-2) format, use <a
href="#sampling-factor">-sampling-factor 2x1</a> or <a
href="#sampling-factor">-sampling-factor 4:2:2</a> to specify the 4:2:2
downsampling method.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="scale"></a>-scale <var>geometry</var></h3>
</div>

<p class="magick-description">minify / magnify the image with pixel block averaging and pixel replication, respectively.</p>

<p>Change the image size simply by replacing pixels by averaging pixels
together when minifying, or replacing pixels when magnifying.  </p>

<p>The results are thus equivalent to using <a href="#resize">-resize</a> with
a <a href="#filter">-filter</a> setting of <code>box</code>.  Though it is a lot
faster, as it avoids all the filter processing of the image. As such it
completely ignores the current <a href="#filter">-filter</a> setting. </p>

<p>If when shrinking (minifying) images the original image is some integer
multiple of the new image size, the number of pixels averaged together to
produce the new pixel color is the same across the whole image. This is
a special case known as 'binning' and is often used as a method of reducing
noise in image such as those generated by digital cameras, especially in low
light conditions. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="scene"></a>-scene <var>value</var></h3>
</div>

<p class="magick-description">set scene number.</p>

<p>This option sets the scene number of an image or the first image in an image sequence.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="screen"></a>-screen</h3>
</div>

<p class="magick-description">specify the screen to capture.</p>

<p>This option indicates that the GetImage request used to obtain the image
should be done on the root window, rather than directly on the specified
window. In this way, you can obtain pieces of other windows that overlap the
specified window, and more importantly, you can capture menus or other popups
that are independent windows but appear over the specified window.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="seed"></a>-seed</h3>
</div>

<p class="magick-description">seed a new sequence of pseudo-random numbers</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="segment"></a>-segment <var>cluster-threshold</var>x<var>smoothing-threshold</var></h3>
</div>

<p class="magick-description">segment the colors of an image.</p>

<p>Segment an image by analyzing the histograms of the color components and
identifying units that are homogeneous with the fuzzy c-means technique. This
is part of the ImageMagick color quantization routines. </p>

<p>Specify <var>cluster threshold</var> as the number of pixels in
each cluster that must exceed the cluster threshold to be considered valid.
<var>Smoothing threshold</var> eliminates noise in the second
derivative of the histogram. As the value is increased, you can expect
a smoother second derivative.  The default is 1.5.</p>

<p>If the <a href="#verbose">-verbose</a> setting is defined, a detailed report
of the color clusters is returned.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="selective-blur"></a>-selective-blur <var>radius</var><br />-selective-blur <var>radius</var>x<var>sigma</var>{<var>+threshold</var>}</h3>
</div>

<p class="magick-description">Selectively blur pixels within a contrast threshold.</p>

<p>Blurs those pixels that are less than or equal to the threshold in
contrast. The threshold may be expressed as a fraction of <var>QuantumRange</var> or as a percentage.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="separate"></a>-separate</h3>
</div>

<p class="magick-description">separate an image channel into a grayscale image.  Specify the channel with <a href="#channel">-channel</a>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="sepia-tone"></a>-sepia-tone <var>percent-threshold</var></h3>
</div>

<p class="magick-description">simulate a sepia-toned photo.</p>

<p>Specify <var>threshold</var> as the percent threshold of the intensity (0 - 99.9%).</p>

<p>This option applies a special effect to the image, similar to the effect
achieved in a photo darkroom by sepia toning.  Threshold ranges from 0 to <var>QuantumRange</var> and is a measure of the extent of the sepia
toning.  A threshold of 80% is a good starting point for a reasonable
tone.</p>



<div style="margin: auto;">
  <h3 class="magick-header"><a id="set"></a>-set <var>key value</var></h3>
  <h3 class="magick-header">+set <var>key</var></h3>
</div>

<p class="magick-description">sets image attributes and properties for images in the current image sequence.</p>

<p>This will assign (or modify) specific settings attached to all the images
in the current image sequence.  Using the <a href="#set">+set</a> form of the
option will either remove, or reset that setting to a default state, as
appropriate.  </p>

<p>For example, it will modify specific well known image meta-data
'attributes' such as those normally overridden by: the options <a
href="#delay" >-delay</a>, <a href="#dispose" >-dispose</a>, and <a
href="#page" >-page</a>, <a href="#colorspace" >-colorspace</a>; generally
assigned before the image is read in, by using a <var>key</var> of
the same name. </p>

<p>If the given <var>key</var> does not match a specific known
'attribute ', such as shown above, the setting is stored as a a free form
'property' string.  Such settings are listed in <a href="#verbose"
>-verbose</a> information ("<code>info:</code>" output format) as "Properties".
</p>

<p>This includes string 'properties' that are set by and assigned to images
using the options <a href="#comment" >-comment</a>, <a href="#label"
>-label</a>, <a href="#caption" >-caption</a>. These options actually assign
a global 'artifact' which are automatically assigned (and any <a href="<?php
echo $_SESSION['RelativePath'] ?>/../script/escape.php" >Format Percent
Escapes</a> expanded) to images as they are read in.  For example:</p>

<pre><code>
-> convert rose: -set comment 'Rose is a rose is a rose is a rose' rose.png
identify -format %c rose.png
Rose is a rose is a rose is a rose
</code></pre>

<p>The set value can also make use of <a href="<?php echo
$_SESSION['RelativePath']?>/../script/escape.php" >Format and Print Image
Properties</a> in the defined value.  For example:</p>

<pre><code>
-> convert rose: -set origsize '%wx%h' -resize 50% \
  -format 'Old size = %[origsize]  New size = %wx%h' info:
Old size = 70x46  New size = 35x23
</code></pre>

<p>Other well known 'properties' that are available include:
'<code>date:create</code>' and '<code>date:modify</code>' and
'<code>signature</code>'. </p>

<p>The <a href="#repage">-repage</a> operator will also allow you to modify
the '<code>page</code>' attribute of an image for images already in memory (also
see <a href="#repage">-page</a>).  However it is designed to provide a finer
control of the sub-parts of this 'attribute'. The <a href="#set">-set page</a>
option will only provide a direct, unmodified assignment of  '<code>page</code>'
attribute. </p>

<p>This option can also associate a colorspace or profile with your image.
For example,</p>

<pre><code>
convert image.psd -set profile ISOcoated_v2_eci.icc image-icc.psd
</code></pre>

<p>Some 'properties' must be defined in a specific way to be used. For
example only 'properties' prefixed with "<code>filename:</code>" can be used to
modify the output filename of an image. For example</p>

<pre><code>
convert rose: -set filename:mysize '%wx%h' 'rose_%[filename:mysize].png'
</code></pre>

<p>If the setting value is prefixed with "<code>option:</code>" the setting will
be saved as a global "Artifact" exactly as if it was set using the <a
href="#define" >-define</a> option. As such settings are global in scope, they
can be used to pass 'attributes' and 'properties' of one specific image,
in a way that allows you to use them in a completely different image, even if
the original image has long since been modified or destroyed. For example: </p>

<pre><code>
convert rose:  -set option:rosesize '%wx%h' -delete 0 \
  label:'%[rosesize]'   label_size_of_rose.gif"
</code></pre>

<p>Note that <a href="<?php echo $_SESSION['RelativePath']
?>/../script/escape.php" >Format Percent Escapes</a> will only match
a 'artifact' if the given <var>key</var> does not match an existing
'attribute' or 'property'.  </p>

<p>You can set the attributes of the image registry by prefixing the value
with <code>registry:</code>.</p>

<p>The <a href="#set">-set profile</a> option can also be used to inject
previously-formatted ancillary chunks into the output PNG file, using
the commandline option as shown below or by setting the profile via a
programming interface:</p>

<pre><code>
convert in.png -set profile PNG-chunk-x:&lt;filename&gt; out.png
</code></pre>

<p>where <var>x</var> is a location flag and
<var>filename</var> is a file containing the chunk
name in the first 4 bytes, then a colon (":"), followed by the chunk data.
This encoder will compute the chunk length and CRC, so those must not
be included in the file.</p>

<p>"x" can be "b" (before PLTE), "m" (middle, i.e., between PLTE and IDAT),
or "e" (end, i.e., after IDAT).  If you want to write multiple chunks
of the same type, then add a short unique string after the "x" to prevent
subsequent profiles from overwriting the preceding ones, e.g.,</p>


<pre><code>
convert in.png -set profile PNG-chunk-b01:file01 \ 
  -profile PNG-chunk-b02:file02 out.png
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="shade"></a>-shade <var>azimuth</var>x<var>elevation</var></h3>
</div>

<p class="magick-description">shade the image using a distant light source.</p>

<p>Specify <var>azimuth</var> and <var>elevation</var> as
the position of the light source. Use <a href="#shade">+shade</a> to return
the shading results as a grayscale image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="shadow"></a>-shadow <var>percent-opacity</var>{x<var>sigma</var>}{<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">simulate an image shadow.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a
id="shared-memory"></a>-shared-memory</h3>
</div>

<p class="magick-description">use shared memory.</p>

<p>This option specifies whether the utility should attempt to use shared
memory for pixmaps. ImageMagick must be compiled with shared memory support,
and the display must support the <var>MIT-SHM</var> extension.
Otherwise, this option is ignored. The default is <code>True</code>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="sharpen"></a>-sharpen <var>radius</var><br />-sharpen <var>radius</var>x<var>sigma</var></h3>
</div>

<p class="magick-description">sharpen the image.</p>

<p>Use a Gaussian operator of the given radius and standard deviation (sigma).</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="shave"></a>-shave <var>geometry</var></h3>
</div>

<p class="magick-description">Shave pixels from the image edges.</p>

<p>The <var>size</var> portion of the <var>geometry</var>
argument specifies the width of the region to be removed from both sides of
the image and the height of the regions to be removed from top and bottom.
Offsets are ignored.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="shear"></a>-shear <var>Xdegrees</var>[x<var>Ydegrees</var>]</h3>
</div>

<p class="magick-description">Shear the image along the x-axis and/or y-axis.</p>

<p>The shear angles may be positive, negative, or zero. When <var>Ydegrees</var> is omitted it defaults to 0. When both angles are
given, the horizontal component of the shear is performed before the vertical
component.</p>

<p>Shearing slides one edge of an image along the x-axis or y-axis (i.e.,
horizontally or vertically, respectively),creating a parallelogram. The amount
of each is controlled by the respective shear angle. For horizontal shears,
<var>Xdegrees</var> is measured clockwise relative to "up" (the
negative y-axis), sliding the top edge to the right when 0°&lt;<var>Xdegrees</var>&lt;90° and to the left when 90°&lt;<var>Xdegrees</var>&lt;180°.  For vertical shears <var>Ydegrees</var> is measured clockwise relative to "right" (the
positive x-axis), sliding the right edge down when 0°&lt;<var>Ydegrees</var>&lt;90° and up when 90°&lt;<var>Ydegrees</var>&lt;180°.</p>

<p>Empty triangles left over from shearing the image are filled with the color
defined by the <a href="#fill">-background</a> option. The color is specified
using the format described under the <a href="#fill">-fill</a> option.</p>

<p>The horizontal shear is performed before the vertical part. This is
important to note, since horizontal and vertical shears do not
<var>commute</var>, i.e., the order matters in a sequence of shears. For
example, the following two commands are not equivalent.</p>

<pre><code>
convert logo: -shear 20x0 -shear 0x60 logo-sheared.png
convert logo: -shear 0x60 -shear 20x0 logo-sheared.png
</code></pre>

<p>The first of the two commands above is equivalent to the following, except
for the amount of empty space created; the command that follows generates
a smaller image, and so is a better choice in terms of time and space.</p>

<pre><code>
convert logo: -shear 20x60 logo-sheared.png
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="sigmoidal-contrast"></a>-sigmoidal-contrast <var>contrast</var>x<var>mid-point</var></h3>
</div>

<p class="magick-description">increase the contrast without saturating highlights or shadows.</p>

<p>Increase the contrast of the image using a sigmoidal transfer function
without saturating highlights or shadows. <var>Contrast</var>
indicates how much to increase the contrast. For example, 0 is none, 3 is
typical and 20 is a lot.
</p>

<p>The <var>mid-point</var> indicates where the maximum change
'slope' in contrast should fall in the resultant image (0 is white; 50% is
middle-gray; 100% is black). </p>

<p>By default the image contrast is increased, use <var>+sigmoidal-contrast</var> to decrease the contrast.</p>

<p>To achieve the equivalent of a sigmoidal brightness change (similar to 
a gamma adjustment), you would use <var>-sigmoidal-contrast
{brightness}x0%</var> to increase brightness and <var>+sigmoidal-contrast {brightness}x0%</var> to decrease brightness.
Note the use of '0' fo rthe mid-point of the sigmoidal curve. </p>

<p>Using a very high <var>contrast</var> will produce a sort of
'smoothed thresholding' of the image.  Not as sharp (with high aliasing
effects) of a true threshold, but with tapered gray-levels around the threshold
<var>mid-point</var>. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="silent"></a>-silent</h3>


</div>

<p class="magick-description">operate silently. This option is only used
by the <?php cmd("import"); ?> tool.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="similarity-threshold"></a>-similarity-threshold <var>value</var></h3>
</div>

<p class="magick-description">minimum RMSE for subimage match.</p>

<p>If this setting is used, then the search will stop as soon as it finds a match whose metric is less than or equal to the value. A partially filled second output image will result. Using a value of zero, will cause the search to stop at the first perfect match it finds. If this setting is left off, then the search will proceed to completion or as limited by <var>-dissimilarity-threshold</var>.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="size"></a>-size <var>width</var>[x<var>height</var>][<var>+offset</var>]</h3>
</div>

<p class="magick-description">set the width and height of the image.</p>

<p>Use this option to specify the width and height of raw images whose
dimensions are unknown such as <code>GRAY</code>, <code>RGB</code>, or
<code>CMYK</code>. In addition to width and height, use <a
href="#size">-size</a> with an offset to skip any header information in the
image or tell the number of colors in a <code>MAP</code> image file, (e.g. -size
640x512+256).</p>

<p>For Photo CD images, choose from these sizes:</p>

<pre><code>
192x128
384x256
768x512
1536x1024
3072x2048
</code></pre>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="sketch"></a>-sketch <var>radius</var><br />-sketch <var>radius</var>x<var>sigma</var>+<var>angle</var></h3>
</div>

<p class="magick-description">simulate a pencil sketch.</p>

<p>Sketch with the given radius, standard deviation (sigma), and angle.   The
angle given is the angle toward which the image is sketched.  That is the
direction people would consider the object is coming from.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="smush"></a>-smush <var>offset</var></h3>
</div>

<p class="magick-description">appends an image sequence together ignoring transparency.</p>

<p>Smush is a more flexible version of <a href="#append">-append</a>, joining the images in the sequence top-to-bottom (<a href="#smush">-smush</a>) or left-to-right (<a href="#smush">+smush</a>), with a gap between images according to the specified offset.</p>

<p>If the offset is negative, images will overlap by that amount.</p>

<p><a href="#smush">-smush</a> respects <a href="#gravity">-gravity</a>. Any empty space will be filled with the <a href="#background">-background</a> color.</p>

<p>For zero offset and transparent images, the non-transparent parts of the two images will be aligned as close as possible without overlapping.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="snaps"></a>-snaps <var>value</var></h3>
</div>

<p class="magick-description">Set the number of screen snapshots.</p>

<p>Use this option to grab more than one image from the X server screen, to create an animation sequence.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="solarize"></a>-solarize <var>percent-threshold</var></h3>
</div>

<p class="magick-description">negate all pixels above the threshold level.</p>

<p>Specify <var>factor</var> as the percent threshold of the intensity (0 - 99.9%).</p>

<p>This option produces a <var>solarization</var> effect seen when
exposing a photographic film to light during the development process.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="sparse-color"></a>-sparse-color <var>method</var>  '<var>x</var>,<var>y</var> <var>color</var>  ...'</h3>
</div>

<p class="magick-description"> color the given image using the specified points of color, and filling the other intervening colors using the given methods. </p>


<dl class="row">
    <dt class="col-md-4">barycentric</dt>
    <dd class="col-md-8">three point triangle of color given 3 points.
        Giving only 2 points will form a linear gradient between those points.
        The gradient generated extends beyond the triangle created by those
        3 points. </dd>
    <dt class="col-md-4">bilinear</dt>
    <dd class="col-md-8">Like barycentric but for 4 points. Less than 4 points
        fall back to barycentric. </dd>
    <dt class="col-md-4">voronoi</dt>
    <dd class="col-md-8">Simply map each pixel to the to nearest color point
        given. The result are polygonal 'cells' of solid color. </dd>
    <dt class="col-md-4">manhatten</dt>
    <dd class="col-md-8">Like voronoi, but resulting polygonal 'cells' are mapped to a fixed coordinate system.</dd>
    <dt class="col-md-4">shepards</dt>
    <dd class="col-md-8">Colors points biased on the ratio of inverse distance
        squared. Generating spots of color in a sea of the average of
        colors. </dd>
    <dt class="col-md-4">inverse</dt>
    <dd class="col-md-8">Colors points biased on the ratio of inverse distance.
        This generates sharper points of color rather than rounded spots of
        '<code>shepards</code>'  Generating spots of color in a sea of the
        average of colors. </dd>
</dl>

<p>The points are placed according to the images location on the virtual
canvas (<a href="#page" >-page</a> or <a href="#repage" >-repage</a>
offset), and do not actually have to exist on the given image, but may be
some point beyond the edge of the image. All points are floating point values.
</p>

<p>Only the color channels defined by the <a href="#channel" >-channel</a> are
modified, which means that by default matte/alpha transparency channel is not
effected. Typically transparency channel is turned off either before or after
the operation. </p>

<p>Of course if some color points are transparent to generate a transparent
gradient, then the image also requires transparency enabled to store the
values. </p>

<p>All the above methods when given a single point of color will replace all
the colors in the image with the color given, regardless of the point. This is
logical, and provides an alternative technique to recolor an image to some
default value. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="splice"></a>-splice <var>geometry</var></h3>
</div>

<p class="magick-description">Splice the current background color into the image.</p>

<p>This will add rows and columns of the current <a
href="#background">-background</a> color into the given image according to the
given  <a href="#gravity">-gravity</a> geometry setting.  <?php seeGeometry();?> Essentially <a href="#splice">-splice</a> will divide the
image into four quadrants, separating them by the inserted rows and columns.
</p>

<p>If a dimension of geometry is zero no rows or columns will be added for that
dimension.  Similarly using a zero offset with the appropriate <a
href="#gravity">-gravity</a> setting will add rows and columns to the edges of
the image, padding the image only along that one edge. Edge padding is what <a
href="#splice">-splice</a> is most commonly used for. </p>

<p>If the exact same  <var>geometry</var> and <a
href="#gravity">-gravity</a> is later used with <a href="#chop">-chop</a> the
added added all splices removed. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="spread"></a>-spread <var>amount</var></h3>
</div>

<p class="magick-description">displace image pixels by a random amount.</p>

<p>The argument <var>amount</var> defines the size of the
neighborhood around each pixel from which to choose a candidate pixel to
blend.</p>

<p>The lookup is controlled by the <a href="#interpolate">-interpolate</a> setting.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="statistic"></a>-statistic <var>type</var> <var>geometry</var></h3>
</div>

<p class="magick-description">replace each pixel with corresponding statistic from the neighborhood.</p>

<p>Choose from these statistic types:</p>
<dl class="row">
<dt class="col-md-4">Gradient</dt><dd class="col-md-8">maximum difference (max - min) value in neighborhood</dd>
<dt class="col-md-4">Maximum</dt><dd class="col-md-8">maximum value per channel in neighborhood</dd>
<dt class="col-md-4">Minimum</dt><dd class="col-md-8">minimum value per channel in neighborhood</dd>
<dt class="col-md-4">Mean</dt><dd class="col-md-8">average value per channel in neighborhood</dd>
<dt class="col-md-4">Median</dt><dd class="col-md-8">median value per channel in neighborhood</dd>
<dt class="col-md-4">Mode</dt><dd class="col-md-8">mode (most frequent) value per channel in neighborhood</dd>
<dt class="col-md-4">Nonpeak</dt><dd class="col-md-8">value just before or after the median value per channel in neighborhood</dd>
<dt class="col-md-4">RMS</dt><dd class="col-md-8">root mean square value per channel in neighborhood</dd>
<dt class="col-md-4">StandardDeviation</dt><dd class="col-md-8"> standard deviation value per channel in neighborhood</dd>
</dl>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="stegano"></a>-stegano <var>offset</var></h3>
</div>

<p class="magick-description">hide watermark within an image.</p>

<p>Use an offset to start the image hiding some number of pixels from the
beginning of the image. Note this offset and the image size. You will need
this information to recover the steganographic image (e.g. display -size
320x256+35 stegano:image.png).</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="stereo"></a>-stereo <var>+x</var>{<var>+y</var>}</h3>
</div>

<p class="magick-description">composite two images to create a red / cyan stereo anaglyph.</p>

<p>The left side of the stereo pair (second image) is saved as the red channel of the output image. The right side (first image) is saved as the green and blue channels. Red-green stereo glasses are required to properly view the stereo image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="storage-type"></a>-storage-type <var>type</var></h3>
</div>

<p class="magick-description">pixel storage type.  Here are the valid types:</p>

<dl class="row">
<dt class="col-md-4">char</dt><dd class="col-md-8">unsigned characters</dd>
<dt class="col-md-4">double</dt><dd class="col-md-8">doubles</dd>
<dt class="col-md-4">float</dt><dd class="col-md-8">floats</dd>
<dt class="col-md-4">integer</dt><dd class="col-md-8">integers</dd>
<dt class="col-md-4">long</dt><dd class="col-md-8">longs</dd>
<dt class="col-md-4">quantum</dt><dd class="col-md-8">pixels in the native depth of your ImageMagick distribution</dd>
<dt class="col-md-4">short</dt><dd class="col-md-8">unsigned shorts</dd>
</dl>

<p>Float and double types are normalized from 0.0 to 1.0 otherwise the pixels
values range from 0 to the maximum value the storage type can support.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="stretch"></a>-stretch <var>fontStretch</var></h3>
</div>

<p class="magick-description">Set a type of stretch style for fonts.</p>

<p>This setting suggests a type of stretch that ImageMagick should try to
apply to the currently selected font family. Select <var>fontStretch</var> from the following.</p>

<pre><code>
Any
Condensed
Expanded
ExtraCondensed
ExtraExpanded
Normal
SemiCondensed
SemiExpanded
UltraCondensed
UltraExpanded
</code></pre>

<p>To print a complete list of stretch types, use <a href="#list">-list
stretch</a>.</p>

<p>For other settings that affect fonts, see the options <a
href="#font">-font</a>, <a href="#family">-family</a>, <a
href="#style">-style</a>, and <a href="#weight">-weight</a>. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="strip"></a>-strip</h3>
</div>

<p class="magick-description">strip the image of any profiles, comments or these PNG chunks: bKGD,cHRM,EXIF,gAMA,iCCP,iTXt,sRGB,tEXt,zCCP,zTXt,date.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="stroke"></a>-stroke <var>color</var></h3>
</div>

<p class="magick-description">color to use when stroking a graphic primitive.</p>

<p>The color is specified using the format described under the <a href="#fill">-fill</a> option.</p>

<p>See <a href="#draw">-draw</a> for further details.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="strokewidth"></a>-strokewidth <var>value</var></h3>
</div>

<p class="magick-description">set the stroke width.</p>

<p>See <a href="#draw">-draw</a> for further details.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="style"></a>-style <var>fontStyle</var></h3>
</div>

<p class="magick-description">Set a font style for text.</p>

<p>This setting suggests a font style that ImageMagick should try to apply to
the currently selected font family. Select <var>fontStyle</var> from
the following.</p>

<pre><code>
Any
Italic
Normal
Oblique
</code></pre>

<p>For other settings that affect fonts, see the options <a
href="#font">-font</a>, <a href="#family">-family</a>, <a
href="#stretch">-stretch</a>, and <a href="#weight">-weight</a>. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="subimage-search"></a>-subimage-search</h3>
</div>

<p class="magick-description">search for subimage.</p>

<p>This option is required to have compare search for the best match location
of a small image within a larger image. This search will produce two images
(or two frames). The first is the "difference" image and the second will
be the "match score" image.</p>

<p>The "match-score" image is smaller containing a pixel for ever possible
position of the top-left corner of the given sub-image. that is its size will
be the size of the larger_image - sub_image + 1.  The brightest location in
this image is the location s the locate on the best match that is also
reported. Note that this may or may not be a perfect match, and the actual
brightness will reflect this. Other bright 'peaks' can be used to locate other
possible matching locations. </p>

<p>Note that the search will try to compare the sub-image at every possible
location in the larger image, as such it can be very slow.  The smaller the
sub-image the faster this search is. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="swap"></a>-swap <var>index,index</var></h3>
</div>

<p class="magick-description">Swap the positions of two images in the image sequence.</p>

<p>For example, <a href="#swap">-swap 0,2</a> swaps the first and the third
images in the current image sequence. Use <a href="#swap">+swap</a> to switch
the last two images in the sequence.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="swirl"></a>-swirl <var>degrees</var></h3>
</div>

<p class="magick-description">swirl image pixels about the center.</p>

<p><var>Degrees</var> defines the tightness of the swirl.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="synchronize"></a>-synchronize</h3>
</div>

<p class="magick-description">synchronize image to storage device.</p>

<p>Set to "true" to ensure all image data is fully flushed and synchronized
to disk. There is a performance penalty, but the benefits include ensuring a
valid image file in the event of a system crash and early reporting if there
is not enough disk space for the image pixel cache.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="taint"></a>-taint</h3>
</div>

<p class="magick-description">Mark the image as modified.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="text-font"></a>-text-font <var>name</var></h3>
</div>

<p class="magick-description">font for writing fixed-width text.</p>

<p>Specifies the name of the preferred font to use in fixed (typewriter style)
formatted text. The default is 14 point <var>Courier</var>.</p>

<p>You can tag a font to specify whether it is a PostScript, TrueType, or
OPTION1 font. For example, <code>Courier.ttf</code> is a TrueType font and
<code>x:fixed</code> is OPTION1.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="texture"></a>-texture <var>filename</var></h3>
</div>

<p class="magick-description">name of texture to tile onto the image background.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="threshold"></a>-threshold <var>value</var>{<var>%</var>}</h3>
</div>

<!-- {<var>green,blue,opacity</var>}
<p>If the green or blue value is omitted, these channels use the same value as
the first one provided. If all three color values are the same, the result is
a bi-level image. If the opacity threshold is omitted, OpaqueOpacity is used
and any partially transparent pixel becomes fully transparent.</p>
-->

<p class="magick-description">Apply simultaneous black/white threshold to the image.</p>

<p>Any pixel values (more specifically, those channels set using <?php
option("channel"); ?>) that exceed the specified threshold are reassigned the
maximum channel value, while all other values are assigned the minimum.</p>

<p> The threshold value can be given as a percentage or as an absolute integer
value corresponding to the desired channel value. When given as an integer,
the minimum attainable value is 0 (corresponding to black when all channels
are affected), but the maximum value (corresponding to white) is that of the
<code>quantum depth</code> of the particular build of ImageMagick, and is
therefore dependent on the installation. For that reason, a reasonable
recommendation for most applications is to specify the threshold values as
a percentage.  </p>

<p> The following would force pixels with red values above 50% to have 100%
red values, while those at or below 50% red would be set to 0 in the red
channel. The green, blue, and alpha channels (if present) would be unchanged.
</p>

<pre><code>
convert in.png -channel red -threshold 50% out.png
</code></pre>

<p>As (possibly) impractical but instructive examples, the following would
generate an all-black and an all-white image with the same dimensions as the
input image.</p>


<pre><code>
convert in.png -threshold 100% black.png
convert in.png -threshold -1 white.png
</code></pre>

<p>Note that the values of the transparency channel is treated as 'matte'
values (0 is opaque) and not as 'alpha' values (0 is transparent).</p>

<p> See also <?php option("black-threshold"); ?> and <?php option("white-threshold"); ?>.
</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="thumbnail"></a>-thumbnail <var>geometry</var></h3>
</div>

<p class="magick-description">Create a thumbnail of the image.</p>

<p>This is similar to <a href="#resize">-resize</a>, except it is optimized
for speed and any image profile, other than a color profile, is removed to
reduce the thumbnail size.  To strip the color profiles as well, add <a
href="#strip">-strip</a> just before of after this option.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="tile"></a>-tile <var>filename</var></h3>
</div>

<p class="magick-description">Set the tile image used for filling a subsequent graphic primitive.</p>

<div style="margin: auto;">
  <h3 class="magick-header">-tile <var>geometry</var></h3>
</div>

<p class="magick-description">Specify the layout of images.</p>

<p><?php seeGeometry();?></p>

<div style="margin: auto;">
  <h3 class="magick-header">-tile</h3>
</div>

<p class="magick-description">Specifies that a subsequent composite operation is repeated across and down image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="tile-offset"></a>-tile-offset {<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var></h3>
</div>

<p class="magick-description">Specify the offset for tile images, relative to the background image it is tiled on.</p>

<p>This should be set before the tiling image is set by <a href="#tile"
>-tile</a> or <a href="#texture" >-texture</a>, or directly applied for
creating a tiled canvas using <code>TILE:</code> or <code>PATTERN:</code> input
formats. </p>

<p>Internally ImageMagick does a <a href="#roll" >-roll</a> of the tile image
by the arguments given when the tile image is set. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="tint"></a>-tint <var>value</var></h3>
</div>

<p class="magick-description">Tint the image with the fill color.</p>

<p>Tint the image with the fill color.</p>

<p>Specify the amount of tinting as a percentage.  Pure colors like black,
white red, yellow, will not be affected by -tint. Only mid-range colors such
as the various shades of grey.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="title"></a>-title <var>string</var></h3>
</div>

<p class="magick-description">Assign a title to displayed image.", "animate", "display", "montage</p>

<p>Use this option to assign a specific title to the image. This assigned to
the image window and is typically displayed in the window title bar.
Optionally you can include the image filename, type, width, height, Exif data,
or other image attribute by embedding special format characters described
under the <a href="#format">-format</a> option.</p>

<p>For example,</p>

<pre><code>
-title "%m:%f %wx%h"
</code></pre>

<p>produces an image title of <code>MIFF:bird.miff 512x480</code> for an image
titled <code>bird.miff</code> and whose width is 512 and height is 480.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="transform"></a>-transform</h3>
</div>

<p class="magick-description">transform the image.</p>

<p>This option applies the transformation matrix from a previous <a href="#affine">-affine</a> option.</p>

<pre><code>
convert -affine 2,2,-2,2,0,0 -transform bird.ppm bird.jpg
</code></pre>


<p>This operator has been now been superseded by the  <a
href="#distort">-distort</a> '<code>AffineProjection</code>' method. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="transparent"></a>-transparent <var>color</var></h3>
</div>

<p class="magick-description">Make this color transparent within the image.</p>

<p>The <var>color</var> argument is defined using the format
described under the <a href="#fill">-fill</a> option. The <a href="#fuzz"
>-fuzz</a> setting can be used to match and replace colors similar to the one
given. </p>

<p>Use  <a href="#transparent" >+transparent</a> to invert the pixels matched.
that is make all non-matching colors transparent. </p>

<p>The <a href="#opaque">-opaque</a>  operator is exactly the same as <a
href="#transparent" >-transparent</a> but replaces the matching color with the
current <a href="#fill">-fill</a> color setting, rather than transparent.
However the <a href="#transparent" >-transparent</a> operator also ensures
that the image has an alpha channel enabled, as per "<code><a href="#alpha"
>-alpha</a> set</code>", and does not require you to modify the <a
href="#channel">-channel</a> to enable alpha channel handling. </p>

<p>Note that this does not define the color as being the 'transparency color'
used for color-mapped image formats, such as GIF.  For that use <a
href="#transparent-color" >-transparent-color</a> </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="transparent-color"></a>-transparent-color <var>color</var></h3>
</div>

<p class="magick-description">Set the transparent color.</p>

<p>Sometimes this is used for saving to image formats such as
GIF and PNG8 which uses this color to represent boolean transparency.  This
does not make a color transparent, it only defines what color the transparent
color is in the color palette of the saved image. Use <a
href="#transparent">-transparent</a> to make an opaque color transparent.</p>

<p>This option allows you to have both an opaque visible color, as well as a
transparent color of the same color value without conflict.  That is, you can
use the same color for both the transparent and opaque color areas within an
image.  This, in turn, frees to you to select a transparent color that is
appropriate when an image is displayed by an application that does not handle a
transparent color index, while allowing ImageMagick to correctly handle images of this
type. </p>

<p>The default transparent color is <code>#00000000</code>, which is fully transparent black.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="transpose"></a>-transpose</h3>
</div>

<p class="magick-description">Mirror the image along the top-left to bottom-right diagonal.</p>

<p> This option mathematically transposes the pixel array.  It is equivalent to the sequence <code>-flip -rotate 90</code>.
</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="transverse"></a>-transverse</h3>
</div>

<p class="magick-description">Mirror the image along the images bottom-left top-right diagonal.  Equivalent to the operations <code>-flop -rotate 90</code>.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="treedepth"></a>-treedepth <var>value</var></h3>
</div>

<p class="magick-description">tree depth for the color reduction algorithm.</p>

<p>Normally, this integer value is zero or one. A value of zero or one causes
the use of an optimal tree depth for the color reduction algorithm.</p>

<p>An optimal depth generally allows the best representation of the source
image with the fastest computational speed and the least amount of memory.
However, the default depth is inappropriate for some images. To assure the
best representation, try values between 2 and 8 for this parameter.  Refer to
the <a href="<?php echo $_SESSION['RelativePath'] ?>/../script/quantize.php"
>color reduction algorithm</a> for more details.</p>

<p>The <a href="#colors">-colors</a> or <a href="#monochrome">-monochrome</a>
option, or writing to an image format which requires color reduction, is
required for this option to take effect.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="trim"></a>-trim</h3>
</div>

<p class="magick-description">trim an image.</p>

<p>This option removes any edges that are exactly the same color as the corner
pixels. Use <a href="#fuzz">-fuzz</a> to make <a href="#trim">-trim</a> remove
edges that are nearly the same color as the corner pixels.</p>

<p>The page or virtual canvas information of the image is preserved allowing
you to extract the result of the <a href="#trim">-trim</a> operation from the
image.  Use a <a href="#repage">+repage</a> to remove the virtual canvas page
information if it is unwanted.</p>

<p>If the trimmed image 'disappears' an warning is produced, and a special
single pixel transparent 'missed' image is returned, in the same way as when a
<a href="#crop">-crop</a> operation 'misses' the image proper. </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="type"></a>-type <var>type</var></h3>
</div>

<p class="magick-description">the image type.</p> <p>Choose from: <code>Bilevel</code>,
<code>Grayscale</code>, <code>GrayscaleMatte</code>, <code>Palette</code>,
<code>PaletteMatte</code>, <code>TrueColor</code>, <code>TrueColorMatte</code>,
<code>ColorSeparation</code>, or <code>ColorSeparationMatte</code>.</p>

<p>Normally, when a format supports different subformats such as grayscale and
truecolor, the encoder will try to choose an efficient subformat. The <a
href="#type">-type</a> option can be used to override this behavior. For
example, to prevent a JPEG from being written in grayscale format even though
only gray pixels are present, use.</p>

<pre><code>
convert bird.png -type TrueColor bird.jpg
</code></pre>

<p>Similarly, use <a href="#type">-type TrueColorMatte</a> to force the
encoder to write an alpha channel even though the image is opaque, if the
output format supports transparency.</p>

<p>Use <a href="#type">-type optimize</a> to ensure the image is written in the smallest possible file size.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="undercolor"></a>-undercolor <var>color</var></h3>
</div>

<p class="magick-description">set the color of the annotation bounding box.</p>

<p>The color is specified using the format described under the <a href="#fill">-fill</a> option.</p>

<p>See <a href="#draw">-draw</a> for further details.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="update"></a>-update <var>seconds</var></h3>
</div>

<p class="magick-description">detect when image file is modified and redisplay.</p>

<p>Suppose that while you are displaying an image the file that is currently
displayed is over-written.  <code>display</code> will automagically detect that
the input file has been changed and update the displayed image
accordingly.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="unique-colors"></a>-unique-colors</h3>
</div>

<p class="magick-description">discard all but one of any pixel color.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="units"></a>-units <var>type</var></h3>
</div>

<p class="magick-description">the units of image resolution.</p>

<p>Choose from: <code>Undefined</code>, <code>PixelsPerInch</code>, or
<code>PixelsPerCentimeter</code>. This option is normally used in conjunction
with the <a href="#density">-density</a> option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="unsharp"></a>-unsharp <var>radius</var><br />-unsharp <var>radius</var>x<var>sigma</var>{<var>+gain</var>}{<var>+threshold</var>}</h3>
</div>

<p class="magick-description">sharpen the image with an unsharp mask operator.</p>

<p>The <a href="#unsharp">-unsharp</a> option sharpens an image. The image is
convolved with a Gaussian operator of the given radius and standard deviation
(sigma). For reasonable results, radius should be larger than sigma. Use
a radius of 0 to have the method select a suitable radius.</p>

<p>The parameters are:</p>

<dl class="row">
<dt class="col-md-4">radius</dt>
<dd class="col-md-8">The radius of the Gaussian, in pixels,  not counting the center pixel (default 0).</dd>
<dt class="col-md-4">sigma</dt>
<dd class="col-md-8">The standard deviation of the Gaussian, in pixels (default 1.0).</dd>
<dt class="col-md-4">gain</dt>
<dd class="col-md-8">The fraction of the difference between the original and the blur image that is added back into the original (default 1.0).</dd>
<dt class="col-md-4">threshold</dt>
<dd class="col-md-8">The threshold, as a fraction of <var>QuantumRange</var>, needed to apply the difference amount (default 0.05).</dd>
</dl>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="verbose"></a>-verbose</h3>
</div>

<p class="magick-description">print detailed information about the image when this option precedes the <a href="#identify">-identify</a> option or <code>info:</code>.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="version"></a>-version</h3>
</div>

<p class="magick-description">print ImageMagick version string and exit.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="view"></a>-view <var>string</var></h3>
</div>

<p class="magick-description">FlashPix viewing parameters.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="vignette"></a>-vignette <var>radius</var>{x<var>sigma</var>}{<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">soften the edges of the image in vignette style.</p>

<p>The vignette effect rolloff is controlled by radiusxsigma. For nominal rolloff, this would be set to 0xsigma. A value of 0x0 will produce a circle/ellipse with no rolloff. The arguments x and y control the size of the circle. Larger values decrease the radii and smaller values increase the radii. Values of +0+0 will generate a circle/ellipse the same size as the image. The default values for x and y are 10% of the corresponding image dimension. Thus, the radii will be decreased by 10%, i.e., the diameters of the circle/ellipse will be 80% of the corresponding image dimension.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="virtual-pixel"></a>-virtual-pixel <var>method</var></h3>
</div>

<p class="magick-description">Specify contents of <var>virtual pixels</var>.</p>

<p>This option defines what color source should be used if and when a color
lookup completely 'misses' the source image. The color(s) that appear to
surround the source image.  Generally this color is derived from the source
image, but could also be set to a specify background color. </p>

<p>Choose from these methods:</p>

<dl class="row">
<dt class="col-md-4">background</dt><dd class="col-md-8">the area surrounding the image is the background color</dd>
<dt class="col-md-4">black</dt><dd class="col-md-8">the area surrounding the image is black</dd>
<dt class="col-md-4">checker-tile</dt><dd class="col-md-8">alternate squares with image and background color</dd>
<dt class="col-md-4">dither</dt><dd class="col-md-8">non-random 32x32 dithered pattern</dd>
<dt class="col-md-4">edge</dt><dd class="col-md-8">extend the edge pixel toward infinity</dd>
<dt class="col-md-4">gray</dt><dd class="col-md-8">the area surrounding the image is gray</dd>
<dt class="col-md-4">horizontal-tile</dt><dd class="col-md-8">horizontally tile the image, background color above/below</dd>
<dt class="col-md-4">horizontal-tile-edge</dt><dd class="col-md-8">horizontally tile the image and replicate the side edge pixels</dd>
<dt class="col-md-4">mirror</dt><dd class="col-md-8">mirror tile the image</dd>
<dt class="col-md-4">random</dt><dd class="col-md-8">choose a random pixel from the image</dd>
<dt class="col-md-4">tile</dt><dd class="col-md-8">tile the image (default)</dd>
<dt class="col-md-4">transparent</dt><dd class="col-md-8">the area surrounding the image is transparent blackness</dd>
<dt class="col-md-4">vertical-tile</dt><dd class="col-md-8">vertically tile the image, sides are background color</dd>
<dt class="col-md-4">vertical-tile-edge</dt><dd class="col-md-8">vertically tile the image and replicate the side edge pixels</dd>
<dt class="col-md-4">white</dt><dd class="col-md-8">the area surrounding the image is white</dd>
</dl>

<p>The default value is "edge".</p>

<p>This most important for distortion operators such as <a href="#distort"
>-distort</a>, <a href="#implode" >-implode</a>, and <a href="#fx" >-fx</a>.
However it also effects operations that may access pixels just outside the
image proper, such as <a href="#convolve">-convolve</a>, <a
href="#blur">-blur</a>, and <a href="#sharpen">-sharpen</a>. </p>

<p>To print a complete list of virtual pixel types, use the <a
href="#list">-list virtual-pixel</a> option.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="visual"></a>-visual <var>type</var></h3>
</div>

<p class="magick-description">Animate images using this X visual type.", 'animate', 'display'</p>

<p>Choose from these visual classes:</p>

<pre><code>
StaticGray    TrueColor
GrayScale     DirectColor
StaticColor   default
PseudoColor   visual id
</code></pre>

<p>The X server must support the visual you choose, otherwise an error occurs.
If a visual is not specified, the visual class that can display the most
simultaneous colors on the default screen is chosen.</p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="watermark"></a>-watermark <var>brightness</var>x<var>saturation</var></h3>
</div>

<p class="magick-description">Watermark an image using the given percentages of brightness and saturation.</p>

<p>Take a grayscale image (with alpha mask) and modify the destination image's
brightness according to watermark image's grayscale value and the
<var>brightness</var> percentage.  The destinations color saturation
attribute is just direct modified by the <var>saturation</var>
percentage, which defaults to 100 percent (no color change). </p>


<div style="margin: auto;">
  <h3 class="magick-header"><a id="wave"></a>-wave <var>amplitude</var><br />-wave <var>amplitude</var>x<var>wavelength</var></h3>
</div>

<p class="magick-description">Shear the columns of an image into a sine wave.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="wavelet-denoise"></a>-wavelet-denoise <var>threshold</var><br />-wavelet-denoise <var>threshold</var>x<var>softness</var></h3>
</div>

<p class="magick-description">removes noise from the image using a wavelet transform.  The threshold is the value below which everything is considered noise and ranges from 0.0 (none) to QuantumRange or use percent (e.g. 5%). Softness attenuates the threshold and typically ranges from 0.0 (none) to 1.0.  The higher the value the more noise that remains in the image.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="weight"></a>-weight <var>fontWeight</var></h3>
</div>

<p class="magick-description">Set a font weight for text.</p>

<p>This setting suggests a font weight that ImageMagick should try to apply to
the currently selected font family. Use a positive integer for
<var>fontWeight</var> or select from the following.</p>

<dl class="row">
<dt class="col-md-4">Thin </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 100.</dd>
<dt class="col-md-4">ExtraLight </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 200.</dd>
<dt class="col-md-4">Light </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 300.</dd>
<dt class="col-md-4">Normal </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 400.</dd>
<dt class="col-md-4">Medium </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 500.</dd>
<dt class="col-md-4">DemiBold </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 600.</dd>
<dt class="col-md-4">Bold </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 700.</dd>
<dt class="col-md-4">ExtraBold </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 800.</dd>
<dt class="col-md-4">Heavy </dt>
<dd class="col-md-8">Same as <var>fontWeight</var> = 900.</dd>
</dl>
<br/>

<p>To print a complete list of weight types, use <a href="#list">-list weight</a>.</p>

<p>For other settings that affect fonts, see the options <a
href="#font">-font</a>, <a href="#family">-family</a>, <a
href="#stretch">-stretch</a>, and <a href="#style">-style</a>. </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="white-point"></a>-white-point <var>x,y</var></h3>
</div>

<p class="magick-description">chromaticity white point.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="white-threshold"></a>-white-threshold <var>value</var>{<var>%</var>}</h3>
</div>

<p class="magick-description">Force to white all pixels above the threshold while leaving all pixels at or below the threshold unchanged.</p>

<p> The threshold value can be given as a percentage or as an absolute integer
value within [0, <var>QuantumRange</var>] corresponding to the
desired <?php option("channel"); ?> value. See <?php option("threshold"); ?>
for more details on thresholds and resulting values.  </p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="window"></a>-window <var>id</var></h3>
</div>

<p class="magick-description">Make the image the background of a window.", 'animate', 'display'</p>

<p><var>id</var> can be a window id or name. Specify <code>root</code>
to select X's root window as the target window.</p>

<p>By default the image is tiled onto the background of the target window. If
<code>backdrop</code> or <a href="#geometry">-resize</a> are specified, the
image is surrounded by the background color. Refer to <code>X RESOURCES</code>
for details.</p>

<p>The image will not display on the root window if the image has more unique
colors than the target window colormap allows. Use <a
href="#colors">-colors</a> to reduce the number of colors.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="window-group"></a>-window-group</h3>
</div>

<p class="magick-description">specify the window group.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="write"></a>-write <var>filename</var></h3>
</div>

<p class="magick-description">write an image sequence.</p>

<p>The image sequence preceding the <a href="#write">-write</a> <var>filename</var> option is written out, and processing continues with the same image in its current state if there are additional options. To restore the image to its original state after writing it, use the <a href="#write">+write</a> <var>filename</var> option.</p>

<p>Use <a href="#compress">-compress</a> to specify the type of image compression.</p>

<div style="margin: auto;">
  <h3 class="magick-header"><a id="write-mask"></a>-write-mask <var>filename</var></h3>
</div>

<p class="magick-description">Prevent updates to image pixels specified by the mask.</p>

<p>This the same as using a mask used for composite masking operations, with
grayscale values causing blended updates of the image the mask is attached to.
</p>

<p>Use <a href="#write-mask">+write-mask</a> to remove the mask from images.</p>

<p>Also see <a href="#clip-mask">-clip-mask</a> which work in the same way,
but with strict boolean masking. </p>
</div>
</div>



