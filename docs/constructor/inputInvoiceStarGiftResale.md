# inputInvoiceStarGiftResale

**Description** : *Used to buy a collectible gift currently up on resale, see here for more info on the full flow*

**Layer** : 229

```tl
inputInvoiceStarGiftResale#e9b0c658 flags:# ton:flags.0?true show_name:flags.2?true slug:string to_id:InputPeer message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **ton** | [`flags.0?true`](type/true) | Buy the gift using TON |
| **show_name** | [`flags.2?true`](type/true) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | Slug of the gift to buy |
| <mark>to_id</mark> | [`InputPeer`](type/InputPeer) | The receiver of the gift |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftResale(
	ton : true,
	show_name : true,
	slug : 'QsZCm8HDa6p2A0cf',
	to_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : $client->textWithEntities(
		text : '6Xou7MPxfz5ZivTb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 11,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 83,
				language : 'utR7wisL6pz1QX2y',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : 5513132988711853694,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 9,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : 149154169224163596,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 65,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 26,
				date : 54,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 25,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 3,
				old_text : 'k6lOrX9uqfTBhYMJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 98,
			),
		),
	),
);
```