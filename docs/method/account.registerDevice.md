# account.registerDevice

**Description** : *Register device to receive PUSH notifications*

**Layer** : 218

```tl
account.registerDevice#ec86017a flags:# no_muted:flags.0?true token_type:int token:string app_sandbox:Bool secret:bytes other_uids:Vector<long> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_muted** | [`flags.0?true`](type/true) | Avoid receiving (silent and invisible background) notifications. Useful to save battery |
| <mark>token_type</mark> | [`int`](type/int) | Device token type, see PUSH updates for the possible values |
| <mark>token</mark> | [`string`](type/string) | Device token, see PUSH updates for the possible values |
| <mark>app_sandbox</mark> | [`Bool`](type/Bool) | If (boolTrue) is transmitted, a sandbox-certificate will be used during transmission |
| <mark>secret</mark> | [`bytes`](type/bytes) | For FCM and APNS VoIP, optional encryption key used to encrypt push notifications |
| <mark>other_uids</mark> | [`Vector<long>`](type/long) | List of user identifiers of other users currently using the client |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TOKEN_EMPTY** | `400` | The specified token is empty |
| **TOKEN_INVALID** | `400` | The provided token is invalid |
| **TOKEN_TYPE_INVALID** | `400` | The specified token type is invalid |
| **WEBPUSH_AUTH_INVALID** | `400` | The specified web push authentication secret is invalid |
| **WEBPUSH_KEY_INVALID** | `400` | The specified web push elliptic curve Diffie-Hellman public key is invalid |
| **WEBPUSH_TOKEN_INVALID** | `400` | The specified web push token is invalid |

---

## Example

```php
$bool = $client->account->registerDevice(
	no_muted : true,
	token_type : 56,
	token : 'IUAkaP7WzGbmRjdx',
	app_sandbox : true,
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	other_uids : array(8907407088292490889),
);
```