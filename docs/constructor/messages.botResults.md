# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 214

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Whether the result is a picture gallery |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| **next_offset** | [`flags.1?string`](type/string) | The next offset to use when navigating through results |
| **switch_pm** | [`flags.2?InlineBotSwitchPM`](type/InlineBotSwitchPM) | Shown as a button on top of the remaining inline result list; if clicked, redirects the user to a private chat with the bot with the specified start parameter |
| **switch_webview** | [`flags.3?InlineBotWebView`](type/InlineBotWebView) | Shown as a button on top of the remaining inline result list; if clicked, opens the specified inline mode mini app |
| <mark>results</mark> | [`Vector<BotInlineResult>`](type/BotInlineResult) | The results |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.BotResults](type/messages.BotResults)

---

## Example

```php
$messagesBotResults = $client->messages->botResults(
	gallery : true,
	query_id : -123318654218633777,
	next_offset : 'DoM378L12Om6dKWV',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'Pg8hl9DdIvCnaAf2',
		start_param : 'mVzuDsbIt1gfvLZa',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'Q9ETVt3fmgGeDKCP',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'vNnK8opJcPCL3zaQ',
			type : 'iTduqSH9wcCyNKYl',
			title : '8eYRZbx2CupFaJvn',
			description : 'ZgmkOf4F2IAvHyxE',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5559668938780125420,
				size : 64,
				mime_type : '1uC3vaYzRLHWegcZ',
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
				access_hash : -3742857309638668478,
				size : 59,
				mime_type : 'wdIf6TO2FPgHNWEJ',
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
				message : 'cSHy5Xqob7RQjBIg',
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
		$client->botInlineMediaResult(
			id : 'l7M9fTtRBFprmQ4n',
			type : 'hPu1glwXGRvkpyJ5',
			photo : $client->photoEmpty(
				id : 2802203183743836348,
			),
			document : $client->documentEmpty(
				id : -2280473833546626220,
			),
			title : 'QnedyBHWRJYjIEDr',
			description : 'daS6VXUye4j5OBHM',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'qF8KNDABTu1Y2wZl',
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
	),
	cache_time : 83,
	users : array(
		$client->userEmpty(
			id : -6413677937017412740,
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
			id : 7018156145730710840,
			access_hash : 819743107818596037,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O7RgmFBwA62vQpoj',
					reason : 'gTKAEIJYUpD6P03c',
					text : 'Rzl6ifu4xNDtGrYn',
				),
			),
			bot_inline_placeholder : 'SgrNVCbuXafxRBwn',
			lang_code : '2gLItjTMqWEb1hVp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 6,
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -7688444332803410503,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 6100402221392816324,
			),
			bot_active_users : 32,
			bot_verification_icon : -1384264472550626274,
			send_paid_messages_stars : -3817068066995304818,
		),
	),
);
```