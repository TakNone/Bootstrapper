# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 216

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait before showing the first ad |
| **between_delay** | [`flags.2?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait after the previous ad is hidden, before showing the next ad |
| <mark>messages</mark> | [`Vector<SponsoredMessage>`](type/SponsoredMessage) | Sponsored messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the sponsored messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the sponsored messages |

---

## Type

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->sponsoredMessages(
	posts_between : 81,
	start_delay : 79,
	between_delay : 16,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'KAjDBxRpG28weYqE',
			message : '1eVdAPyJubcwETO0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 48,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 30,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 67,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : 'hw3FyQ6m5SXZP8Kk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : -7047607966718705328,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 25,
					document_id : -4571792772721000080,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 37,
				),
			),
			photo : $client->photoEmpty(
				id : 4633431245008572451,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -7254048860943710133,
			),
			button_text : '1R5U0GMQf3AIoxhL',
			sponsor_info : 'GjQALCVl9muIroBR',
			additional_info : 'QUTwWezLbrRlpAcx',
			min_display_duration : 87,
			max_display_duration : 77,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3937454899536747677,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3336713817229785450,
			title : 'RhwefXaULt4pbzHZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 90,
			date : 61,
			version : 99,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 54,
			),
		),
		$client->chatForbidden(
			id : 6453034836421841319,
			title : 'ZlvqkWrcS9HBYTXe',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 6472311289643322958,
			access_hash : 7993930634983194276,
			title : 'Dy6ph0SckmKdVzN9',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3OmkZl5xgQs9GvYM',
					reason : '90isHfIw7eR3MgQL',
					text : 'gpToaVb9D62t18hE',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 24,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 87,
			),
			participants_count : 24,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 71,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 3066300896649774936,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 917167608012711163,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 82,
			bot_verification_icon : -8403220056351954378,
			send_paid_messages_stars : 7758225196751504292,
			linked_monoforum_id : -1179899644759083531,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8378479753922773901,
			access_hash : 8146517981864422759,
			title : 'QV4W7nhm8qZKyYio',
			until_date : 47,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3688400853495138593,
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
			id : -6145599237403844016,
			access_hash : 3803721314061750682,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vXlnfEKDUx0qr8ip',
					reason : 'XbCUix5TfZMkLdgG',
					text : 'xzl1tOs2pnL5eUPj',
				),
			),
			bot_inline_placeholder : 'K30iIncoNrfPTt7k',
			lang_code : 'KJPkZNqvVwS4zrDo',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -613506912964590403,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -4685764213028645802,
			),
			bot_active_users : 87,
			bot_verification_icon : -3035986443724958094,
			send_paid_messages_stars : 3916740568265185862,
		),
	),
);
```