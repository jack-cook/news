// Generated by CoffeeScript 1.6.3
/*

ownCloud - News

@author Bernhard Posselt
@copyright 2012 Bernhard Posselt dev@bernhard-posselt.com

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
License as published by the Free Software Foundation; either
version 3 of the License, or any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU AFFERO GENERAL PUBLIC LICENSE for more details.

You should have received a copy of the GNU Affero General Public
License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*/


(function() {
  angular.module('News').directive('newsClickScroll', [
    '$timeout', function($timeout) {
      return function(scope, elm, attr) {
        var options;
        options = scope.$eval(attr.newsClickScroll);
        return elm.click(function() {
          var direction, scrollArea;
          scrollArea = $(options.scrollArea);
          direction = options.direction;
          return $timeout(function() {
            var scrollPosition;
            if (direction === 'top') {
              scrollPosition = 0;
            } else {
              scrollPosition = scrollArea.prop('scrollHeight');
            }
            return scrollArea.scrollTop(scrollPosition);
          }, 10);
        });
      };
    }
  ]);

}).call(this);