# starGiftAttributeOriginalDetails

**Layer** : 214

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
		user_id : 8481705136369441055,
	),
	recipient_id : $client->peerUser(
		user_id : 2705305435559780401,
	),
	date : 54,
	message : $client->textWithEntities(
		text : 'gf4om6edl5SZRHNi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 12,
				language : 'xeCq0ZpmWkAMuhl3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 73,
				user_id : 305845917669358758,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 8484881175824197034,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 3,
			),
		),
	),
);
```