# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 214

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | NOTHING |
| **between_delay** | [`flags.2?int`](type/int) | NOTHING |
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
	posts_between : 59,
	start_delay : 64,
	between_delay : 50,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'V7eILAgfTWXxvbuG',
			message : 'msA0gUB4I8RK7wdu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 91,
					length : 76,
				),
				$client->messageEntityMention(
					offset : 15,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 67,
					length : 75,
				),
				$client->messageEntityBotCommand(
					offset : 100,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 46,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 35,
					length : 21,
				),
				$client->messageEntityBold(
					offset : 86,
					length : 47,
				),
				$client->messageEntityItalic(
					offset : 81,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 13,
					length : 72,
				),
				$client->messageEntityPre(
					offset : 96,
					length : 85,
					language : 'i4WImT0kCq3RtOLJ',
				),
				$client->messageEntityTextUrl(
					offset : 99,
					length : 85,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 71,
					length : 72,
					user_id : 4199707439156022139,
				),
				$client->inputMessageEntityMentionName(
					offset : 9,
					length : 89,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 73,
					length : 0,
				),
				$client->messageEntityCashtag(
					offset : 88,
					length : 10,
				),
				$client->messageEntityUnderline(
					offset : 80,
					length : 13,
				),
				$client->messageEntityStrike(
					offset : 5,
					length : 80,
				),
				$client->messageEntityBankCard(
					offset : 100,
					length : 98,
				),
				$client->messageEntitySpoiler(
					offset : 25,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 56,
					length : 71,
					document_id : 2969872980346989286,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 84,
					length : 2,
				),
			),
			photo : $client->photoEmpty(
				id : -3738419089038075607,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -11364613117250508,
			),
			button_text : 'nTEefJcOtIVKDZws',
			sponsor_info : '1ewlhgVuvKXQEZs5',
			additional_info : 'Pp6fALtDbKgu5qlr',
			min_display_duration : 31,
			max_display_duration : 43,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6758531680329154630,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8792918631018288998,
			title : 'RL8Hjqf0scEl9aPh',
			photo : $client->chatPhotoEmpty(),
			participants_count : 27,
			date : 32,
			version : 93,
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
				until_date : 77,
			),
		),
		$client->chatForbidden(
			id : 5246833934323404162,
			title : 'cNnrBfMDh2uOqXCx',
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
			id : 6609135580398928038,
			access_hash : -5752395193539810853,
			title : 'CVZcOoI7jsyptYHx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0hqX4YBZTEmV7lot',
					reason : 'zobh4PeqUI2gNmdk',
					text : 'jloLhGnHdIetufw0',
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
				until_date : 67,
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
				until_date : 77,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 99,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 3597038208410726253,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -7229498601249377650,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 71,
			subscription_until_date : 26,
			bot_verification_icon : 3703062000606992971,
			send_paid_messages_stars : -3359138842721264809,
			linked_monoforum_id : 4120705967483401221,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6584633413054728585,
			access_hash : 5341792078427408626,
			title : 'dWLQKb7JtV6lovS2',
			until_date : 95,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7456602845931019251,
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
			id : 6138019529629855765,
			access_hash : 611231476221430786,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lBRo8JO3rQNsgFLf',
					reason : 'w1Z2G0TopbmLvNnW',
					text : 'O8n6WBDHw4azokm9',
				),
			),
			bot_inline_placeholder : 'Y9W8adLOwqk1DgXo',
			lang_code : 'GudxpIYHZ8D4FwVz',
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
				color : 4,
				background_emoji_id : -4320333592280805477,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : 3071326967963642940,
			),
			bot_active_users : 1,
			bot_verification_icon : -985288185700113645,
			send_paid_messages_stars : 1301302598333201510,
		),
	),
);
```