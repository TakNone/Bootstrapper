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
	gift_id : 581493157400377821,
	bid_amount : -2668299970930999972,
	message : $client->textWithEntities(
		text : 'B2GsUI6zlFXmaS9M',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 91,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 92,
				language : 'DQqEfTh0YFdunvNJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 5214068941166916184,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 36,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 54,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -8507108610130440611,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
	),
);
```