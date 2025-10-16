# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 216

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
	query_id : 4038234792942823630,
	next_offset : 'c1EJzsZn3geblCfT',
	switch_pm : $client->inlineBotSwitchPM(
		text : '0KJfB1oRe6IXZM8P',
		start_param : 'IjKmrWbM9dCwgO6P',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'OyXEen1rPbkZ28o4',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'gErVyms2oTWUkvCL',
			type : 'FqnHt6eM5dJXo3Kk',
			title : '8LVfwiq6NI5HQcj3',
			description : 'drob0EtJpRhKLVZi',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -1453985379601546480,
				size : 97,
				mime_type : 'DPrm8KudoWw2acMh',
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
				access_hash : 695756871531929062,
				size : 2,
				mime_type : 'WxXOrZDhnM2RuL7N',
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
				message : 'szd9FlSXn5gYT1ha',
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
			id : 'wklCHUxXDzae3ORg',
			type : 'dZSbBrmkFfwiqWI4',
			photo : $client->photoEmpty(
				id : 1702826243921683850,
			),
			document : $client->documentEmpty(
				id : -1732758596829218946,
			),
			title : '3X9qGgVIMSpoaNbU',
			description : 'DZwgmWeMVr0YFQ6H',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : '8exwvYOmUiMcWIDZ',
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
			id : -6158449840305366893,
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
			id : 7565831159090593124,
			access_hash : -4641160080570763187,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WbP6gwoOGD3SJA2y',
					reason : 'VLFxc9TRGyAH0WBa',
					text : 'jJghYBEa5CQyM2pH',
				),
			),
			bot_inline_placeholder : 'euBynFwU1rPsLDaz',
			lang_code : 'GvDhwcqTARroBNkx',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 32,
			color : $client->peerColor(
				color : 61,
				background_emoji_id : 1261138079091950246,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 2874287975283516746,
			),
			bot_active_users : 35,
			bot_verification_icon : -3939530249837125233,
			send_paid_messages_stars : 3073119434376687727,
		),
	),
);
```