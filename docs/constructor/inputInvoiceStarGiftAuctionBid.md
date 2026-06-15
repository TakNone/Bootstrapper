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
	gift_id : -3476850702701095858,
	bid_amount : 7158678440446997399,
	message : $client->textWithEntities(
		text : 'YmFr2eM0TfQSbU1s',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 76,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : '9DtHSp4yMksluJYN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 6,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : -5643403253023273076,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 94,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : -4866407402485888277,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 3,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 85,
				date : 71,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 45,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 25,
				old_text : 'OHGV4ATwbkJ7LrdF',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 81,
			),
		),
	),
);
```