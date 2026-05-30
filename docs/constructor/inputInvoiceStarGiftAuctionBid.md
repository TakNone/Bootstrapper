# inputInvoiceStarGiftAuctionBid

**Layer** : 225

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
	gift_id : 4658691427786444998,
	bid_amount : 6049425643560946426,
	message : $client->textWithEntities(
		text : 'QDgWXOPJ4pof7iGt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 1,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 99,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : 'Pr29Fl6A5hUYajwO',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 29,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : -748751962522001269,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 25,
				document_id : -4174303484321125282,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 78,
				date : 27,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 23,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 47,
				old_text : 'cOVR3s8a7HjAh5ID',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 74,
			),
		),
	),
);
```