
plugin.tx_simpleblog_bloglisting {
  view {
    templateRootPaths.0 = EXT:simpleblog/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_simpleblog_bloglisting.view.templateRootPath}
    partialRootPaths.0 = EXT:simpleblog/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_simpleblog_bloglisting.view.partialRootPath}
    layoutRootPaths.0 = EXT:simpleblog/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_simpleblog_bloglisting.view.layoutRootPath}
  }
  persistence {
    #storagePid = {$plugin.tx_simpleblog_bloglisting.persistence.storagePid}
    #recursive = 1
    storagePid = 48
    recursive = 42
    classes {
      Pluswerk\Simpleblog\Domain\Model\Blog {
        newRecordStoragePid = 49
      }
      Pluswerk\Simpleblog\Domain\Model\Post {
        newRecordStoragePid = 50
      }
      Pluswerk\Simpleblog\Domain\Model\Comment {
        newRecordStoragePid = 51
      }
      Pluswerk\Simpleblog\Domain\Model\Tags {
        newRecordStoragePid = 52
      }
      Pluswerk\Simpleblog\Domain\Model\Author {
        mapping {
          tableName = fe_users
          columns {
            name.mapOnProperty = fullname
          }
        }
      }
    }
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
  settings {
    loginpage = 55
    blog {
      max = 55
    }

  }
}

plugin.tx_simpleblog._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-simpleblog table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-simpleblog table th {
        font-weight:bold;
    }

    .tx-simpleblog table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
