.. include:: _includes.rst.txt

.. _installation:

============
Installation
============

Target group: **Administrators**

.. note::
   The extension is available for TYPO3 v10 LTS.

.. _installation-requirements:

Requirements
============

The extension has no PHP requirements in addition to TYPO3 and the TYPO3
JobRouter Connector extension.

To use the :ref:`dashboard widgets <dashboard-widgets>`, install and activate
the Dashboard system extension. To use the :ref:`form finisher <form-finisher>`
install and activate the Form system extension.


.. _installation-composer:

Installation via composer
=========================

#. Add a dependency ``brotkrueml/typo3-jobrouter-data`` to your project's
   :file:`composer.json` file to install the current stable version::

      composer req brotkrueml/typo3-jobrouter-data

#. Activate the extension in the Extension Manager.


.. _installation-extension-manager:

Installation in Extension Manager
=================================

The extension needs to be installed as any other extension of TYPO3 CMS in
the Extension Manager:

#. Switch to the module :guilabel:`Admin Tools` > :guilabel:`Extensions`.

#. Get the extension

   #. **Get it from the Extension Manager:** Select the
      :guilabel:`Get Extensions` entry in the upper menu bar, search for the
      extension key ``jobrouter_data`` and import the extension from the
      repository.

   #. **Get it from typo3.org:** You can always get the current version from
      `https://extensions.typo3.org/extension/jobrouter_data/
      <https://extensions.typo3.org/extension/jobrouter_data/>`_ by
      downloading the ``zip`` file. Upload the file afterwards in the Extension
      Manager.
