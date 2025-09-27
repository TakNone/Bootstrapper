# account.unregisterDevice

**Description** : *Deletes a device by its token, stops sending PUSH\-notifications to it*

**Layer** : 214

```tl
account.unregisterDevice#6a0d3206 token_type:int token:string other_uids:Vector<long> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token_type</mark> | [`int`](type/int) | Device token type, see PUSH updates for the possible values |
| <mark>token</mark> | [`string`](type/string) | Device token, see PUSH updates for the possible values |
| <mark>other_uids</mark> | [`Vector<long>`](type/long) | List of user identifiers of other users currently using the client |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TOKEN_INVALID** | `400` | The provided token is invalid |

---

## Example

```php
$bool = $client->account->unregisterDevice(
	token_type : 14,
	token : 'KmnDt7k4yl8iYVqX',
	other_uids : array(3376380302906589371),
);
```