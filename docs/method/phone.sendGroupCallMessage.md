# phone.sendGroupCallMessage

**Description** : *Send an in\-call message to all participants of a video chat/livestream or live story, including in RTMP mode, see here &raquo; for more info*

**Layer** : 229

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
		id : -4429806306844481649,
		access_hash : 6449469187503701247,
	),
	random_id : -6005560040297448123,
	message : $client->textWithEntities(
		text : 'bY41pm6AvKZqEahf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'oxnpFaMPWrcK4Bie',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : -4538150325217951505,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 67,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 89,
				document_id : 5232396077838673149,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 62,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 47,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 83,
				old_text : '7vEtoS1gX4na6Gc8',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 3,
			),
		),
	),
	allow_paid_stars : -1673054560538271744,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```