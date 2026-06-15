# inputInvoiceStarGiftAuctionBid

**Layer** : 227

```tl
inputInvoiceStarGiftAuctionBid#1ecafa10 flags:# hide_name:flags.0?true update_bid:flags.2?true peer:flags.3?InputPeer gift_id:long bid_amount:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **hide_name** | [`flags.0?true`](type/true) | NOTHING |
| **update_bid** | [`flags.2?true`](type/true) | NOTHING |
| **peer** | [`flags.3?InputPeer`](type/InputPeer) | NOTHING |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>bid_amount</mark> | [`long`](type/long) | NOTHING |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftAuctionBid(
	hide_name : true,
	update_bid : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	gift_id : -4342369633495348632,
	bid_amount : -3686312227859425644,
	message : $client->textWithEntities(
		text : 'GbONi3fxk6rc2BS1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 36,
				language : 'OnkqiHINM0Sr8agB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 42,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : -4988893967964315860,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 35,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : -1692652658809264131,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 23,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 46,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 71,
				old_text : 'xl9yXr02qVWJPieL',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 61,
			),
		),
	),
);
```