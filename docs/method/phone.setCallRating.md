# phone.setCallRating

**Description** : *Rate a call, returns info about the rating message sent to the official VoIP bot*

**Layer** : 216

```tl
phone.setCallRating#59ead627 flags:# user_initiative:flags.0?true peer:InputPhoneCall rating:int comment:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **user_initiative** | [`flags.0?true`](type/true) | Whether the user decided on their own initiative to rate the call |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | The call to rate |
| <mark>rating</mark> | [`int`](type/int) | Rating in 1-5 stars |
| <mark>comment</mark> | [`string`](type/string) | An additional comment |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$updates = $client->phone->setCallRating(
	user_initiative : true,
	peer : $client->inputPhoneCall(
		id : 2025047141356084595,
		access_hash : 2707549830305498408,
	),
	rating : 28,
	comment : 'B5ITpZbYRMDVrFkz',
);
```