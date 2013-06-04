========================================
ZURB FOUNDATION 4 - PRE DRUPAL 8 RELEASE
========================================

Getting Started
---------------

At the time of this writing, Twig is integrated into Drupal 8 core but a lot of theme function / render function cleanup remains. We are working diligently to keep up with the changes
as Drupal 8 development progresses towards a release.

Foundation Docs
---------------

Examples of Foundation markup can be found here: http://foundation.zurb.com/docs/

Dependencies
------------

Zurb Foundation theme dependencies are managed with a ruby Gemfile. This manages bundle dependencies and their versions for Foundation core and addons. When you run 'compass install foundation' against this
directory, the Gemfile is adhered to and Foundation is built accordingly.

The reason there is a Gemfile instead of a Composer file is because the Foundation project is built with Compass. This may change in the future to be more in line with Drupal 8 / Symfony way of managing dependencies.

The Gemfile.lock file is a generated result of installing from the Gemfile, recording each pacakge and version used to build the project.

Installing this theme
---------------------

TBD

How to Use Zurb Foundation
--------------------------

TBD


