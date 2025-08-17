# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot's mini app, that can be sent to some chats »*

**Layer** : 211

```tl
messages.preparedInlineMessage#ff57708d query_id:long result:BotInlineResult peer_types:Vector<InlineQueryPeerType> cache_time:int users:Vector<User> = messages.PreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | The query_id to pass to messages.sendInlineBotResult |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | The contents of the message, to be shown in a preview |
| <mark>peer_types</mark> | [`Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Types of chats where this message can be sent |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.PreparedInlineMessage](type/messages.PreparedInlineMessage)

---

## Example

```php
$messagesPreparedInlineMessage = $client->messages->preparedInlineMessage(
	query_id : 4167234434897586146,
	result : $client->botInlineResult(
		id : 'uSdnQ7D9qFErU0ly',
		type : 'Olsd1uhSCp0EQmnv',
		title : 'czJ2WRr9fM16Ump7',
		description : 'ezkTQ1L3DUu4Ej6H',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -1141239217740777468,
			size : 69,
			mime_type : '8epblv1TEgUYd2MR',
			attributes : array(
				$client->documentAttributeImageSize(...),
				$client->documentAttributeAnimated(...),
				$client->documentAttributeSticker(...),
				$client->documentAttributeVideo(...),
				$client->documentAttributeAudio(...),
				$client->documentAttributeFilename(...),
				$client->documentAttributeHasStickers(...),
				$client->documentAttributeCustomEmoji(...),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -5606458541544250496,
			size : 90,
			mime_type : 'tsU1dbkcmYAHnz6u',
			attributes : array(
				$client->documentAttributeImageSize(...),
				$client->documentAttributeAnimated(...),
				$client->documentAttributeSticker(...),
				$client->documentAttributeVideo(...),
				$client->documentAttributeAudio(...),
				$client->documentAttributeFilename(...),
				$client->documentAttributeHasStickers(...),
				$client->documentAttributeCustomEmoji(...),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'oftQypk2w5XczhBG',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
			reply_markup : $client->replyKeyboardHide(...),
		),
	),
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
	cache_time : 99,
	users : array(
		$client->userEmpty(
			id : 8972804819266828260,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 1039000301523783852,
			access_hash : 6512461085473532203,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BhC8p4USwlFQY2ZD',
					reason : 'bp7VMXWUTsHh6AIc',
					text : 'fRsbPd2zIuDhwymA',
				),
			),
			bot_inline_placeholder : '7vZj8aWcCpGQuf6T',
			lang_code : 'xotBpShr30eA7jOT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -1127589932892210267,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : -3519235249450909395,
			),
			bot_active_users : 51,
			bot_verification_icon : 3778796762380258176,
			send_paid_messages_stars : -5646519438850851529,
		),
	),
);
```