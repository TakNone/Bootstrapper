# help.getConfig

**Description** : *Returns current configuration, including data center configuration*

**Layer** : 211

```tl
help.getConfig#c4f9186b = Config;
```

---

## Result

[Config](type/Config)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONNECTION_API_ID_INVALID** | `400` | The provided API id is invalid |
| **CONNECTION_APP_VERSION_EMPTY** | `400` | App version is empty |
| **CONNECTION_LAYER_INVALID** | `400` | Layer invalid |
| **DATA_INVALID** | `400` | Encrypted data invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |

---

## Example

```php
$config = $client->help->getConfig();
```