# inputInvoiceStarGiftAuctionBid

**Layer** : 218

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
	gift_id : 7235265049071665395,
	bid_amount : -8357620048049236212,
	message : $client->textWithEntities(
		text : 'd613XcahzWDlVCgA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 18,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 17,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 47,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'kqG7vLUbwIA9jxou',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 51,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : 8702018912347030737,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 84,
				document_id : -6932731676406144518,
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