# starGiftAttributeOriginalDetails

**Description** : *Info about the sender, receiver and message attached to the original gift &raquo;, before it was upgraded to a collectible gift &raquo;*

**Layer** : 227

```tl
starGiftAttributeOriginalDetails#e0bff26c flags:# sender_id:flags.0?Peer recipient_id:Peer date:int message:flags.1?TextWithEntities = StarGiftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **sender_id** | [`flags.0?Peer`](type/Peer) | Original sender of the gift, absent if the gift was private |
| <mark>recipient_id</mark> | [`Peer`](type/Peer) | Original receiver of the gift |
| <mark>date</mark> | [`int`](type/int) | When was the gift sent |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Original message attached to the gift, if present |

---

## Type

[StarGiftAttribute](type/StarGiftAttribute)

---

## Example

```php
$starGiftAttribute = $client->starGiftAttributeOriginalDetails(
	sender_id : $client->peerUser(
		user_id : -8079186311607270470,
	),
	recipient_id : $client->peerUser(
		user_id : -326987704673139497,
	),
	date : 31,
	message : $client->textWithEntities(
		text : 'QEvR12n4roe9scHg',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 18,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 70,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'EtmbujIWvHi0VLUG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 46,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -8510958492672051171,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -7685823425445492603,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 28,
				date : 85,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 45,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 74,
				old_text : 'EaumwPMBj2GT4iek',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 65,
			),
		),
	),
);
```