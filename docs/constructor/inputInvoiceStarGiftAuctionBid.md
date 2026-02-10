# inputInvoiceStarGiftAuctionBid

**Layer** : 222

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
	gift_id : -6220866677086681489,
	bid_amount : -8988607201191694295,
	message : $client->textWithEntities(
		text : 'JnfgkWAabF6N1dTQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 83,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : 'cuzN1a2meJWOdAYw',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : 3072657185126294870,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 71,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 18,
				document_id : -8790587704257694432,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 25,
			),
		),
	),
);
```