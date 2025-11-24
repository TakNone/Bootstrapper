# messages.startLive

**Layer** : 218

```tl
messages.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true messages_enabled:flags.6?true send_paid_messages_stars:flags.7?long peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| **noforwards** | [`flags.4?true`](type/true) | NOTHING |
| **rtmp_stream** | [`flags.5?true`](type/true) | NOTHING |
| **messages_enabled** | [`flags.6?true`](type/true) | NOTHING |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **caption** | [`flags.0?string`](type/string) | NOTHING |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	messages_enabled : true,
	send_paid_messages_stars : 6792697808335236045,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'rYgesIqd5LT04a7l',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 2,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 1,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'WGyuHrO6g5bfJvjN',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 50,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 94,
			user_id : -618665873442719094,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 54,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 28,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 74,
			document_id : 1945581072689949368,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 59,
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
			chats : array(3411404702587313085),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-6542929422801192516),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -4223950235875063782,
);
```