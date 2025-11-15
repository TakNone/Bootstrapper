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
		id : -9044024749046704291,
		access_hash : 975499426788288067,
	),
	from_id : $client->peerUser(
		user_id : -8319107308251182821,
	),
	random_id : -7457081275864569349,
	message : $client->textWithEntities(
		text : 'Wtbr6LOFZkM72zPJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 28,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'u8GCgEiLSyslcXaf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : -7324787099319255357,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 70,
				document_id : -3156127746814857106,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 12,
			),
		),
	),
);
```