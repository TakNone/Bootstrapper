# stories.startLive

**Description** : *Start a live story, optionally using RTMP livestream mode, see here &raquo; for the full flow*

**Layer** : 233

```tl
stories.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long messages_enabled:flags.6?Bool send_paid_messages_stars:flags.7?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Whether to pin the live story on the peer's profile |
| **noforwards** | [`flags.4?true`](type/true) | Whether viewers must be prevented from forwarding or saving the live story |
| **rtmp_stream** | [`flags.5?true`](type/true) | Create the live story in RTMP livestream mode », where one external streamer publishes all audio and video |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | User, supergroup or channel that will own the live story; basic groups cannot post live stories |
| **caption** | [`flags.0?string`](type/string) | Live story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Privacy rules defining who can view the live story |
| <mark>random_id</mark> | [`long`](type/long) | Client-generated random ID used to prevent duplicate live stories. See here » for more info on random ID deduplication and updateMessageID mapping |
| **messages_enabled** | [`flags.6?Bool`](type/Bool) | Whether the in-call message overlay » should be enabled |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | Minimum Telegram Stars donation required from users other than the live story owner for each comment; the owner may always comment without donating, and 0 allows free comments for everyone |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_LIVE_ALREADY_%d** | `400` | This peer already has an active live story, and its ID is equal to %d |

---

## Example

```php
$updates = $client->stories->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'RXgIbsJGWqjkc01l',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 31,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 60,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 92,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 5,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 85,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 55,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : '35hsEFMxaUIpBT9A',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 86,
			user_id : 8139338420470160013,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 93,
			document_id : -5830634763965090048,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 36,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 91,
			date : 44,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 94,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 75,
			old_text : 'VumpBxlWHcJk0jge',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 19,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 1,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(7868875320345009926),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-4519500587424247042),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 340941066550002789,
	messages_enabled : false,
	send_paid_messages_stars : 7213453383587451025,
);
```