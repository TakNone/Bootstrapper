# messages.webViewResult

**Layer** : 214

```tl
messages.webViewResult#aadf159b result:BotInlineResult users:Vector<User> = messages.WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebViewResult](type/messages.WebViewResult)

---

## Example

```php
$messagesWebViewResult = $client->messages->webViewResult(
	result : $client->botInlineResult(
		id : 'KwfB4XjgkiCe9dDY',
		type : 'bBaDV4Im6nHvMUy7',
		title : 'ztJdI8Fr6Tm3g1AO',
		description : 'ELYmUwMRhSzk51vc',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -1063965734816811930,
			size : 5,
			mime_type : 'mdnrziS6tvkpYy7j',
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
			access_hash : 2808601674706529127,
			size : 82,
			mime_type : '3bwtJoOXDK7RcQe4',
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
			message : 'Jo2tWNaC39AT7fyc',
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
	users : array(
		$client->userEmpty(
			id : -7890348635273096864,
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
			id : -1266103588687021675,
			access_hash : -1923825586497653388,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aprWFKQIXv2nYfoL',
					reason : '8mt0sLRUG6McQPTh',
					text : '3ylKORnJp2HQAMgW',
				),
			),
			bot_inline_placeholder : 'a1QNFxJgLISyWiZA',
			lang_code : '1DVrWImNkwCKGnBp',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 13,
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 7249605624460936722,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -7438488167362545616,
			),
			bot_active_users : 82,
			bot_verification_icon : 5362423809182280891,
			send_paid_messages_stars : 3047989799215700986,
		),
	),
);
```