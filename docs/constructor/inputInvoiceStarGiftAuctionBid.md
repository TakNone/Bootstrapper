# inputInvoiceStarGiftAuctionBid

**Description** : *Used to place a bid in a collectible gift auction &raquo;*

**Layer** : 233

```tl
inputInvoiceStarGiftAuctionBid#1ecafa10 flags:# hide_name:flags.0?true update_bid:flags.2?true peer:flags.3?InputPeer gift_id:long bid_amount:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **hide_name** | [`flags.0?true`](type/true) | If set, your name will be hidden if the destination peer decides to display the gift on their profile (they will still see that you sent the gift).    Must not be set when updating an existing bid, as the value cannot be changed for existing bids |
| **update_bid** | [`flags.2?true`](type/true) | Must be set when increasing an already existing bid |
| **peer** | [`flags.3?InputPeer`](type/InputPeer) | Identifier of the user or channel (only if channelFull.stargifts_available is set) that will receive the gift |
| <mark>gift_id</mark> | [`long`](type/long) | Identifier of the gift, from starGift.id |
| <mark>bid_amount</mark> | [`long`](type/long) | Total amount of the bid in Telegram Stars |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Optional message that will be attached with the gift if we end up winning this round: the maximum length for this field is specified in the stargifts_message_length_max client configuration value ».    Must not be set when updating an existing bid, as the value cannot be changed for existing bids |

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
	gift_id : -3174966872903369045,
	bid_amount : -8617560076887853463,
	message : $client->textWithEntities(
		text : 'Zp0TGUs6uBdNxEWR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 83,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 86,
				language : 'HKmTEt6YdCrfae1Q',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 61,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : 8886293767985290025,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 17,
				document_id : -217701981154905711,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 96,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 34,
				date : 62,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 59,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 38,
				old_text : 'zWgZBNw9eusHphj5',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 79,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 74,
			),
		),
	),
);
```