# inputInvoiceStarGiftAuctionBid

**Description** : *Used to place a bid in a collectible gift auction &raquo;*

**Layer** : 229

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
	gift_id : 6614808285887881057,
	bid_amount : 3363143558698203547,
	message : $client->textWithEntities(
		text : 'vIu7Mqc4TJz2GtDh',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 8,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 1,
				language : 'PWrSA6FNb09Q3ens',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : -5560085359887695805,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 85,
				document_id : 3238298709723680796,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 63,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 96,
				date : 40,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 23,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 20,
				old_text : 'DwR5Bakf7XQ0SNx4',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 42,
			),
		),
	),
);
```