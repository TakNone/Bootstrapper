# phone.sendGroupCallMessage

**Description** : *Send an in\-call message to all participants of a video chat/livestream or live story, including in RTMP mode, see here &raquo; for more info*

**Layer** : 233

```tl
phone.sendGroupCallMessage#b1d11410 flags:# call:InputGroupCall random_id:long message:TextWithEntities allow_paid_stars:flags.0?long send_as:flags.1?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream or live story that should receive the message, reaction or donation |
| <mark>random_id</mark> | [`long`](type/long) | Fresh client-generated random ID used to deduplicate the message or donation. See here » for more info on random ID deduplication and updateMessageID mapping |
| <mark>message</mark> | [`TextWithEntities`](type/TextWithEntities) | Message text or emoji reaction; pass an empty value when sending a standalone paid live story donation |
| **allow_paid_stars** | [`flags.0?long`](type/long) | User-confirmed number of Telegram Stars to donate with a live story comment or standalone donation |
| **send_as** | [`flags.1?InputPeer`](type/InputPeer) | Optional peer to display as the author of a live story message or reaction; can only be used for live stories |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_JOIN_MISSING** | `400` | You haven't joined this group call |

---

## Example

```php
$updates = $client->phone->sendGroupCallMessage(
	call : $client->inputGroupCall(
		id : -6492391942926048384,
		access_hash : 6484914164451591578,
	),
	random_id : 5016689602410658003,
	message : $client->textWithEntities(
		text : 'nXxb7olJyEOgcsSu',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 46,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 55,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 45,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : '7gyTRhsXK02c8xpm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : -1954461904701775474,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 34,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 35,
				document_id : -2901017914107269587,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 58,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 90,
				date : 45,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 57,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 59,
				old_text : '7BfLhQq60FIV1WXx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 57,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 15,
			),
		),
	),
	allow_paid_stars : -8780544398813217066,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```