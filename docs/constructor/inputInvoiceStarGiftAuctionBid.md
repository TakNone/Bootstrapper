# inputInvoiceStarGiftAuctionBid

**Layer** : 218

```tl
inputInvoiceStarGiftAuctionBid#1ecafa10 flags:# hide_name:flags.0?true update_bid:flags.2?true peer:flags.3?InputPeer gift_id:long bid_amount:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
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
	gift_id : 1988311492839945886,
	bid_amount : 6247661508715774541,
	message : $client->textWithEntities(
		text : 'RCPYVk5baQBgUdW9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 8,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 13,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'wCXyWe0GtBOsDVZ4',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 3,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : -7977607682357134924,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 32,
				document_id : -155080233484096127,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
	),
);
```