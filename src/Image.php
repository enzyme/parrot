<?php

namespace Enzyme\Parrot;

class Image extends Parrot
{
    public function info()
    {
        return $this->dispatch('gd_info', func_get_args());
    }

    public function getImageSize()
    {
        return $this->dispatch('getimagesize', func_get_args());
    }

    public function getImageSizeFromString()
    {
        return $this->dispatch('getimagesizefromstring', func_get_args());
    }

    public function typeToExtension()
    {
        return $this->dispatch('image_type_to_extension', func_get_args());
    }

    public function typeToMimeType()
    {
        return $this->dispatch('image_type_to_mime_type', func_get_args());
    }

    public function toWbmp()
    {
        return $this->dispatch('image2wbmp', func_get_args());
    }

    public function affine()
    {
        return $this->dispatch('imageaffine', func_get_args());
    }

    public function affineMatrixConcat()
    {
        return $this->dispatch('imageaffinematrixconcat', func_get_args());
    }

    public function affineMatrixGet()
    {
        return $this->dispatch('imageaffinematrixget', func_get_args());
    }

    public function alphaBlending()
    {
        return $this->dispatch('imagealphablending', func_get_args());
    }

    public function antiAlias()
    {
        return $this->dispatch('imageantialias', func_get_args());
    }

    public function arc()
    {
        return $this->dispatch('imagearc', func_get_args());
    }

    public function char()
    {
        return $this->dispatch('imagechar', func_get_args());
    }

    public function charUp()
    {
        return $this->dispatch('imagecharup', func_get_args());
    }

    public function colorAllocate()
    {
        return $this->dispatch('imagecolorallocate', func_get_args());
    }

    public function colorAllocateAlpha()
    {
        return $this->dispatch('imagecolorallocatealpha', func_get_args());
    }

    public function colorAt()
    {
        return $this->dispatch('imagecolorat', func_get_args());
    }

    public function colorClosest()
    {
        return $this->dispatch('imagecolorclosest', func_get_args());
    }

    public function colorClosestAlpha()
    {
        return $this->dispatch('imagecolorclosestalpha', func_get_args());
    }

    public function colorClosestHwb()
    {
        return $this->dispatch('imagecolorclosesthwb', func_get_args());
    }

    public function colorDeallocate()
    {
        return $this->dispatch('imagecolordeallocate', func_get_args());
    }

    public function colorExact()
    {
        return $this->dispatch('imagecolorexact', func_get_args());
    }

    public function colorExactAlpha()
    {
        return $this->dispatch('imagecolorexactalpha', func_get_args());
    }

    public function colorMatch()
    {
        return $this->dispatch('imagecolormatch', func_get_args());
    }

    public function colorResolve()
    {
        return $this->dispatch('imagecolorresolve', func_get_args());
    }

    public function colorResolveAlpha()
    {
        return $this->dispatch('imagecolorresolvealpha', func_get_args());
    }

    public function colorSet()
    {
        return $this->dispatch('imagecolorset', func_get_args());
    }

    public function colorsForIndex()
    {
        return $this->dispatch('imagecolorsforindex', func_get_args());
    }

    public function colorsTotal()
    {
        return $this->dispatch('imagecolorstotal', func_get_args());
    }

    public function colorTransparent()
    {
        return $this->dispatch('imagecolortransparent', func_get_args());
    }

    public function convolution()
    {
        return $this->dispatch('imageconvolution', func_get_args());
    }

    public function copy()
    {
        return $this->dispatch('imagecopy', func_get_args());
    }

    public function copyMerge()
    {
        return $this->dispatch('imagecopymerge', func_get_args());
    }

    public function copyMergeGray()
    {
        return $this->dispatch('imagecopymergegray', func_get_args());
    }

    public function copyResampled()
    {
        return $this->dispatch('imagecopyresampled', func_get_args());
    }

    public function copyResized()
    {
        return $this->dispatch('imagecopyresized', func_get_args());
    }

    public function create()
    {
        return $this->dispatch('imagecreate', func_get_args());
    }

    public function createFromGd2()
    {
        return $this->dispatch('imagecreatefromgd2', func_get_args());
    }

    public function createFromGd2Part()
    {
        return $this->dispatch('imagecreatefromgd2part', func_get_args());
    }

    public function createFromGd()
    {
        return $this->dispatch('imagecreatefromgd', func_get_args());
    }

    public function createFromGif()
    {
        return $this->dispatch('imagecreatefromgif', func_get_args());
    }

    public function createFromJpeg()
    {
        return $this->dispatch('imagecreatefromjpeg', func_get_args());
    }

    public function createFromPng()
    {
        return $this->dispatch('imagecreatefrompng', func_get_args());
    }

    public function createFromString()
    {
        return $this->dispatch('imagecreatefromstring', func_get_args());
    }

    public function createFromWbmp()
    {
        return $this->dispatch('imagecreatefromwbmp', func_get_args());
    }

    public function createFromWebp()
    {
        return $this->dispatch('imagecreatefromwebp', func_get_args());
    }

    public function createFromXbm()
    {
        return $this->dispatch('imagecreatefromxbm', func_get_args());
    }

    public function createFromXpm()
    {
        return $this->dispatch('imagecreatefromxpm', func_get_args());
    }

    public function createTrueColor()
    {
        return $this->dispatch('imagecreatetruecolor', func_get_args());
    }

    public function crop()
    {
        return $this->dispatch('imagecrop', func_get_args());
    }

    public function cropAuto()
    {
        return $this->dispatch('imagecropauto', func_get_args());
    }

    public function dashedLine()
    {
        return $this->dispatch('imagedashedline', func_get_args());
    }

    public function destroy()
    {
        return $this->dispatch('imagedestroy', func_get_args());
    }

    public function ellipse()
    {
        return $this->dispatch('imageellipse', func_get_args());
    }

    public function fill()
    {
        return $this->dispatch('imagefill', func_get_args());
    }

    public function filledArc()
    {
        return $this->dispatch('imagefilledarc', func_get_args());
    }

    public function filledEllipse()
    {
        return $this->dispatch('imagefilledellipse', func_get_args());
    }

    public function filledPolygon()
    {
        return $this->dispatch('imagefilledpolygon', func_get_args());
    }

    public function filledRectangle()
    {
        return $this->dispatch('imagefilledrectangle', func_get_args());
    }

    public function fillToBorder()
    {
        return $this->dispatch('imagefilltoborder', func_get_args());
    }

    public function filter()
    {
        return $this->dispatch('imagefilter', func_get_args());
    }

    public function flip()
    {
        return $this->dispatch('imageflip', func_get_args());
    }

    public function fontHeight()
    {
        return $this->dispatch('imagefontheight', func_get_args());
    }

    public function fontWidth()
    {
        return $this->dispatch('imagefontwidth', func_get_args());
    }

    public function ftBbox()
    {
        return $this->dispatch('imageftbbox', func_get_args());
    }

    public function ftText()
    {
        return $this->dispatch('imagefttext', func_get_args());
    }

    public function gammaCorrect()
    {
        return $this->dispatch('imagegammacorrect', func_get_args());
    }

    public function gd2()
    {
        return $this->dispatch('imagegd2', func_get_args());
    }

    public function gd()
    {
        return $this->dispatch('imagegd', func_get_args());
    }

    public function gif()
    {
        return $this->dispatch('imagegif', func_get_args());
    }

    public function grabScreen()
    {
        return $this->dispatch('imagegrabscreen', func_get_args());
    }

    public function grabWindow()
    {
        return $this->dispatch('imagegrabwindow', func_get_args());
    }

    public function interlace()
    {
        return $this->dispatch('imageinterlace', func_get_args());
    }

    public function isTrueColor()
    {
        return $this->dispatch('imageistruecolor', func_get_args());
    }

    public function jpeg()
    {
        return $this->dispatch('imagejpeg', func_get_args());
    }

    public function layerEffect()
    {
        return $this->dispatch('imagelayereffect', func_get_args());
    }

    public function line()
    {
        return $this->dispatch('imageline', func_get_args());
    }

    public function loadFont()
    {
        return $this->dispatch('imageloadfont', func_get_args());
    }

    public function paletteCopy()
    {
        return $this->dispatch('imagepalettecopy', func_get_args());
    }

    public function paletteToTrueColor()
    {
        return $this->dispatch('imagepalettetotruecolor', func_get_args());
    }

    public function png()
    {
        return $this->dispatch('imagepng', func_get_args());
    }

    public function polygon()
    {
        return $this->dispatch('imagepolygon', func_get_args());
    }

    public function psBbox()
    {
        return $this->dispatch('imagepsbbox', func_get_args());
    }

    public function psEncodeFont()
    {
        return $this->dispatch('imagepsencodefont', func_get_args());
    }

    public function psExtendFont()
    {
        return $this->dispatch('imagepsextendfont', func_get_args());
    }

    public function psFreeFont()
    {
        return $this->dispatch('imagepsfreefont', func_get_args());
    }

    public function psLoadFont()
    {
        return $this->dispatch('imagepsloadfont', func_get_args());
    }

    public function psSlantFont()
    {
        return $this->dispatch('imagepsslantfont', func_get_args());
    }

    public function psText()
    {
        return $this->dispatch('imagepstext', func_get_args());
    }

    public function rectangle()
    {
        return $this->dispatch('imagerectangle', func_get_args());
    }

    public function rotate()
    {
        return $this->dispatch('imagerotate', func_get_args());
    }

    public function saveAlpha()
    {
        return $this->dispatch('imagesavealpha', func_get_args());
    }

    public function scale()
    {
        return $this->dispatch('imagescale', func_get_args());
    }

    public function setBrush()
    {
        return $this->dispatch('imagesetbrush', func_get_args());
    }

    public function setInterpolation()
    {
        return $this->dispatch('imagesetinterpolation', func_get_args());
    }

    public function setPixel()
    {
        return $this->dispatch('imagesetpixel', func_get_args());
    }

    public function setStyle()
    {
        return $this->dispatch('imagesetstyle', func_get_args());
    }

    public function setThickness()
    {
        return $this->dispatch('imagesetthickness', func_get_args());
    }

    public function setTile()
    {
        return $this->dispatch('imagesettile', func_get_args());
    }

    public function string()
    {
        return $this->dispatch('imagestring', func_get_args());
    }

    public function stringUp()
    {
        return $this->dispatch('imagestringup', func_get_args());
    }

    public function sx()
    {
        return $this->dispatch('imagesx', func_get_args());
    }

    public function sy()
    {
        return $this->dispatch('imagesy', func_get_args());
    }

    public function trueColorToPalette()
    {
        return $this->dispatch('imagetruecolortopalette', func_get_args());
    }

    public function ttfBbox()
    {
        return $this->dispatch('imagettfbbox', func_get_args());
    }

    public function ttfText()
    {
        return $this->dispatch('imagettftext', func_get_args());
    }

    public function types()
    {
        return $this->dispatch('imagetypes', func_get_args());
    }

    public function wbmp()
    {
        return $this->dispatch('imagewbmp', func_get_args());
    }

    public function webp()
    {
        return $this->dispatch('imagewebp', func_get_args());
    }

    public function xbm()
    {
        return $this->dispatch('imagexbm', func_get_args());
    }

    public function iptcEmbed()
    {
        return $this->dispatch('iptcembed', func_get_args());
    }

    public function iptcParse()
    {
        return $this->dispatch('iptcparse', func_get_args());
    }

    public function jpeg2Wbmp()
    {
        return $this->dispatch('jpeg2wbmp', func_get_args());
    }

    public function png2Wbmp()
    {
        return $this->dispatch('png2wbmp', func_get_args());
    }
}