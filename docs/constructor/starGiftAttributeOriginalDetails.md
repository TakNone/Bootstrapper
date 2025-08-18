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
		user_id : -3003361562518491109,
	),
	recipient_id : $client->peerUser(
		user_id : -8119771016913837827,
	),
	date : 70,
	message : $client->textWithEntities(
		text : 'uWkdvajBlqPzU8Rh',
		entities : array(
			$client->messageEntityUnknown(
				offset : 83,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 77,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 28,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 13,
				length : 59,
			),
			$client->messageEntityUrl(
				offset : 9,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 64,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 74,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 72,
				length : 25,
			),
			$client->messageEntityCode(
				offset : 39,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 16,
				length : 57,
				language : 'jwbs02f13FrhocBd',
			),
			$client->messageEntityTextUrl(
				offset : 73,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 41,
				length : 83,
				user_id : -6784326244236525315,
			),
			$client->inputMessageEntityMentionName(
				offset : 68,
				length : 3,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 45,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 51,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 5,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 21,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 85,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 8,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 58,
				length : 86,
				document_id : 6253623634790168081,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 53,
				length : 81,
			),
		),
	),
);
```