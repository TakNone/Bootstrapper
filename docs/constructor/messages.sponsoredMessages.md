# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 222

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	posts_between : 6,
	start_delay : 45,
	between_delay : 11,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : '9E1OuwQWi3jakhmN',
			message : 'e2xav7JyPZNBREUC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 27,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 76,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 15,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 96,
					language : '8JzT4IaEs6k9xfPo',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 63,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : 8701654114140251003,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 83,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 82,
					document_id : 7044063123258245422,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 18,
				),
			),
			photo : $client->photoEmpty(
				id : 908275888145161329,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -4311695169043464961,
			),
			button_text : 'ICkgAcT632JfBjOL',
			sponsor_info : 'VbFYUqWoGt5u1zwQ',
			additional_info : 'GA9CRMsaKVYjiINg',
			min_display_duration : 98,
			max_display_duration : 45,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5260210150609127021,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1908839220470662124,
			title : 'qTNjHRtiuCgL1oU2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 36,
			version : 100,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 71,
			),
		),
		$client->chatForbidden(
			id : -7319144207191440120,
			title : 'TxjiR2GODrhXncy9',
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
			id : 8089599676876662219,
			access_hash : -885468453432258674,
			title : 'gJiZmwVWsR0rUMao',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mok5vEbwN3MpfPG9',
					reason : 'jdEZ5UerWvH0lmAQ',
					text : 'XsZWGbNokAKS2YEq',
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
				until_date : 45,
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
				until_date : 46,
			),
			participants_count : 45,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 90,
			),
			color : $client->peerColor(
				color : 88,
				background_emoji_id : -5325280147109672483,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 517569314536341481,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 37,
			subscription_until_date : 78,
			bot_verification_icon : -3608744602065643626,
			send_paid_messages_stars : 6881352654970852366,
			linked_monoforum_id : -1232418095198986393,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3451201931968893069,
			access_hash : -2326579255967116930,
			title : 'cC7pkYh52lLG0Wza',
			until_date : 84,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2187533469102984793,
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
			bot_forum_can_manage_topics : true,
			id : 5029642715153686259,
			access_hash : 4430926524976835641,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'P9eFzwlArsut4kYp',
					reason : '1uPWJsdZQa0Ge9z6',
					text : 'syrRSl3ZGp7vKLXQ',
				),
			),
			bot_inline_placeholder : 'eiU7s1q2o3WJR8BA',
			lang_code : 'eaMrwjVQ34RfG2g5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 95,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : -8139036756419430675,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -993137940582088859,
			),
			bot_active_users : 30,
			bot_verification_icon : -8333381249710052738,
			send_paid_messages_stars : 5164545891142367390,
		),
	),
);
```