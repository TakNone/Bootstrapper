# phone.setCallRating

**Description** : *Rate a call, returns info about the rating message sent to the official VoIP bot*

**Layer** : 227

```tl
phone.setCallRating#59ead627 flags:# user_initiative:flags.0?true peer:InputPhoneCall rating:int comment:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : -95189738395228554,
		access_hash : 8961760663436448225,
	),
	rating : 28,
	comment : 'YB13sIO6oy7Xwelp',
);
```