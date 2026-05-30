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
	gift_id : -4158926788589276448,
	bid_amount : -6027085682474226602,
	message : $client->textWithEntities(
		text : 'N4Mwz1bJl0nHR6xj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 7,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'gDsbCmadGUPTrKtF',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : 2615108891797822758,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 79,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : 5572474775744966321,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
	),
);
```