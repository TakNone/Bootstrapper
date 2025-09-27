# updateGroupCallMessage

**Layer** : 216

```tl
updateGroupCallMessage#78c314e0 call:InputGroupCall from_id:Peer random_id:long message:TextWithEntities = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>from_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallMessage(
	call : $client->inputGroupCall(
		id : 4976138033852935574,
		access_hash : 25844838818891829,
	),
	from_id : $client->peerUser(
		user_id : 3996075785067165069,
	),
	random_id : 5401583392745748547,
	message : $client->textWithEntities(
		text : '0lKHLsz2kvc1XUF8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 86,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : 'PRFIJjtZpwiXb7xk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : 7550459424327994264,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : -5055185990278910628,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
		),
	),
);
```