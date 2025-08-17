# starGiftAttributeOriginalDetails

**Layer** : 211

```tl
starGiftAttributeOriginalDetails#e0bff26c flags:# sender_id:flags.0?Peer recipient_id:Peer date:int message:flags.1?TextWithEntities = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **sender_id** | [`flags.0?Peer`](type/Peer) | NOTHING |
| <mark>recipient_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeOriginalDetails(
	sender_id : $client->peerUser(
		user_id : -8114551631308797627,
	),
	recipient_id : $client->peerUser(
		user_id : 1493929335404037020,
	),
	date : 85,
	message : $client->textWithEntities(
		text : 'Ku4V7Gjte5QOh6Cf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 86,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 30,
				length : 56,
			),
			$client->messageEntityHashtag(
				offset : 93,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 62,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 52,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 1,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 89,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 58,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 89,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 9,
				length : 50,
				language : '4ZF0vAKblBLrpidT',
			),
			$client->messageEntityTextUrl(
				offset : 2,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 76,
				length : 43,
				user_id : 4348563141619732749,
			),
			$client->inputMessageEntityMentionName(
				offset : 76,
				length : 80,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 51,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 27,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 13,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 63,
				length : 65,
			),
			$client->messageEntityBankCard(
				offset : 21,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 15,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 89,
				length : 48,
				document_id : -3921052852343569515,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 80,
				length : 67,
			),
		),
	),
);
```