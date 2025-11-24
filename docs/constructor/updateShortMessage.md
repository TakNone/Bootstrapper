# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 218

```tl
updateShortMessage#313bc7f8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int user_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in the message |
| **media_unread** | [`flags.5?true`](type/true) | Whether there are some unread mentions in this message |
| **silent** | [`flags.13?true`](type/true) | If true, the message is a silent message, no notifications should be triggered |
| <mark>id</mark> | [`int`](type/int) | The message ID |
| <mark>user_id</mark> | [`long`](type/long) | The ID of the sender (if outgoing will be the ID of the destination) of the message |
| <mark>message</mark> | [`string`](type/string) | The message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about a forwarded message |
| **via_bot_id** | [`flags.11?long`](type/long) | Info about the inline bot used to generate this message |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply and thread information |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortMessage(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	id : 58,
	user_id : -5295105521344322627,
	message : 'DHd9lAhurPFxGTJf',
	pts : 60,
	pts_count : 19,
	date : 69,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6940673275768463114,
		),
		from_name : 'mcN3TIlkJCEASdqb',
		date : 1,
		channel_post : 50,
		post_author : 'fNvEcb65XSptz9Va',
		saved_from_peer : $client->peerUser(
			user_id : 6020780285491734899,
		),
		saved_from_msg_id : 6,
		saved_from_id : $client->peerUser(
			user_id : -2034036167491668381,
		),
		saved_from_name : 'OX9bmstKJDUVcP45',
		saved_date : 5,
		psa_type : 'ckTQ8IHzwfPVpdt4',
	),
	via_bot_id : -2195876922240557025,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 53,
		reply_to_peer_id : $client->peerUser(
			user_id : 2893180815740234215,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 5262791801648524341,
			),
			from_name : 'IZDdM75uQNmfFw38',
			date : 9,
			channel_post : 39,
			post_author : '2VaXCb9S6MDIsUHn',
			saved_from_peer : $client->peerUser(
				user_id : -5382324294450989631,
			),
			saved_from_msg_id : 71,
			saved_from_id : $client->peerUser(
				user_id : 1782147369716599934,
			),
			saved_from_name : 'vxkVoSRZ1HqIYUEf',
			saved_date : 19,
			psa_type : '6mBeECwkuvPYyNpx',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 24,
		quote_text : 'QkZASwEisGatzFTr',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 23,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 70,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'Mw3B7jKmc2nNWi8Z',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -6500986633160233255,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : 5303166519970049997,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
		),
		quote_offset : 17,
		todo_item_id : 48,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 32,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 19,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : 'sJGenIbyCVDaK92Q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 38,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 99,
			user_id : 4176645593037233590,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 31,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 46,
			document_id : -6010788980966915309,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 15,
		),
	),
	ttl_period : 44,
);
```