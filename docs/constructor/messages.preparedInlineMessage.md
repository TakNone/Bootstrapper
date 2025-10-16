# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 216

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
	query_id : 275640568626103085,
	result : $client->botInlineResult(
		id : 'sz8XdfPucmrF0Qg7',
		type : 'WHYi1JlRzSfbvUnG',
		title : 'ab459M6cV0okxP2E',
		description : '5J3m86WR1xtnTojK',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -7447160566006597404,
			size : 38,
			mime_type : '3KToiFR2nlqab71I',
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
			access_hash : 8675131307073358252,
			size : 31,
			mime_type : '04TbgQfKxAhio73q',
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
			message : 'pI8BkcP4ZG7vWgKE',
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
	cache_time : 62,
	users : array(
		$client->userEmpty(
			id : -7461442492717497104,
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
			bot_forum_view : true,
			id : 435086724045062539,
			access_hash : 8397888787334525544,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PjvhYz1MFtWAOpCS',
					reason : '7TmQd5M2h4DrY8jJ',
					text : 'sn35WkyfUK12jStc',
				),
			),
			bot_inline_placeholder : 'ajuC8sWIN1GZpxMo',
			lang_code : 'N9mRdq8HZYrGuAD7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -5152248811199550667,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 3430159680566542787,
			),
			bot_active_users : 54,
			bot_verification_icon : -1517734159268822394,
			send_paid_messages_stars : 708224100149558330,
		),
	),
);
```