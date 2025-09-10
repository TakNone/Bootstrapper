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
		user_id : -8486873634470927129,
	),
	recipient_id : $client->peerUser(
		user_id : 7051452485203305189,
	),
	date : 83,
	message : $client->textWithEntities(
		text : 'Yd2O08Lb7fUnvhp3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 71,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 92,
			),
			$client->messageEntityHashtag(
				offset : 26,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 74,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 51,
				length : 25,
			),
			$client->messageEntityEmail(
				offset : 61,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 35,
				length : 43,
			),
			$client->messageEntityItalic(
				offset : 5,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 99,
				length : 40,
			),
			$client->messageEntityPre(
				offset : 26,
				length : 48,
				language : 'uGyFjBxEONZUc4AT',
			),
			$client->messageEntityTextUrl(
				offset : 85,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 99,
				length : 7,
				user_id : -3000962796551569818,
			),
			$client->inputMessageEntityMentionName(
				offset : 3,
				length : 14,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 49,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 60,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 83,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 89,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 5,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 16,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 96,
				length : 9,
				document_id : 4426254844623670452,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 93,
				length : 85,
			),
		),
	),
);
```