# registry.tcl
#
# This is a simple human-readable database defining the OpenMAX AL
# extension registry. For each extension, it includes an extension
# number, flags if the extension is public, and includes a path to
# the extension specification.
#
# The companion script 'regproc.tcl' uses this to build up the
# extensions portion of the public registry, by copying out only
# the public specifications.

# Extra directories to pick up AL extension specs outside the registry tree
set alext ../../../OpenMAX-AL/trunk/extensions/
lappend extraDirs $alext

# Perhaps ideally, we'd publish the .h/.c files instead of the .zip, but
# currently the structure of the registry script doesn't support more than
# one "header" field.
extdocument "OpenMAX AL Digital TV" {
    number      1
    flags       public
    filename    ../../../OpenMAX-AL/trunk/extensions/OpenMAX_AL_Digital_TV_Extension/doc/OpenMAX_AL_Digital_TV_Extension_Specification.pdf
    header      ../../../OpenMAX-AL/trunk/extensions/OpenMAX_AL_Digital_TV_Extension/headers/OpenMAX_AL_Digital_TV_Extension_Headers.zip
    vendor      KHR
}
extdocument "OpenMAX AL EGLStream DataLocator" {
    number      2
    flags       public
    filename    ../../../OpenMAX-AL/trunk/extensions/OpenMAX_AL_EGLStream_DataLocator_Extension/doc/OpenMAX_AL_EGLStream_DataLocator_Extension_1_0_Specification.pdf
    header      ../../../OpenMAX-AL/trunk/extensions/OpenMAX_AL_EGLStream_DataLocator_Extension/doc/OpenMAXAL_EGL_Ext.h
    vendor      KHR
}
# Next free extension number: 3
