# inputInvoiceStarGiftResale

**Description** : *Used to buy a collectible gift currently up on resale, see here for more info on the full flow*

**Layer** : 233

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
	slug : 'DoISphilR3VK7X9B',
	to_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : $client->textWithEntities(
		text : 'GUQhzu1oO4edaYtK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 45,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'C2rszyh5nJiceRFq',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 98,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : -6996731728003164566,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 27,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 99,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : 4292660613546122742,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 48,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 93,
				date : 0,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 72,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 46,
				old_text : 'v2mknue7p6G5aLZU',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 35,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 100,
			),
		),
	),
);
```