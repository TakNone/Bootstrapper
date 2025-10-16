# starGiftAttributeOriginalDetails

**Layer** : 216

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
		user_id : 7536424950971325633,
	),
	recipient_id : $client->peerUser(
		user_id : -2398973656163995517,
	),
	date : 92,
	message : $client->textWithEntities(
		text : '0eROuDPifJ61jXLz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : 'f7Qr5oxaXl3zRwc2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : -5160800437144126915,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 23,
				document_id : -6243016685224705933,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 11,
			),
		),
	),
);
```