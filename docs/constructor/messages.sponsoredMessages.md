# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 225

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
	posts_between : 33,
	start_delay : 25,
	between_delay : 9,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'VmMBEUHKlNJXLfdb',
			message : 'vpl8GYUXVOB5Hjr4',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 55,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 44,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'T0YHiNQSFyoCpuMX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : 3771920606392924269,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 4,
					document_id : 1268405861035288540,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 47,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 13,
					date : 12,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 58,
					old_text : 'xREmTas9yDVcuZNj',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 39,
				),
			),
			photo : $client->photoEmpty(
				id : 5286037820425753942,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -1117193440852126968,
			),
			button_text : '1VUMiwxXWrLdvYbh',
			sponsor_info : '2wKFjcO4rIAsfbWV',
			additional_info : 'GkFS1NLiQCoVTmXP',
			min_display_duration : 61,
			max_display_duration : 47,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -243051565802892664,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5699691234645944821,
			title : 'AZu5SaCLhckj9FNb',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 45,
			version : 66,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 41,
			),
		),
		$client->chatForbidden(
			id : 3140644944561288051,
			title : 'WG7gsepXNUrYToDa',
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
			id : 3515075264405628023,
			access_hash : -7110842606769135777,
			title : 'RYwGb62Wmgx7oACk',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9ABPDFW10t3nl2Ja',
					reason : 'jB47wdfJZ02VN1nC',
					text : '52AymctRGwLbNsU9',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 54,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 32,
			),
			participants_count : 96,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 2485796796516083177,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -1565879011073153483,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 95,
			subscription_until_date : 38,
			bot_verification_icon : -1860513784753543775,
			send_paid_messages_stars : 6579223100572659231,
			linked_monoforum_id : -5497553932082049731,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3224176240078033201,
			access_hash : -5393231585252892734,
			title : '3hit8ar70QxDSjAq',
			until_date : 93,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5700412143280092447,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -2464911216524883045,
			access_hash : 2017799491630950789,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Do2gFwBxySfuAz0p',
					reason : 'TWBYsajbMpkzHDQL',
					text : 'lV3HGFLouxym2Wpe',
				),
			),
			bot_inline_placeholder : 'l2T0XyKjnmVJrWtM',
			lang_code : 'Lbro6f9i3pz81e0s',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -1239009794827221087,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 8754957880600612796,
			),
			bot_active_users : 35,
			bot_verification_icon : 3158283459432427041,
			send_paid_messages_stars : 2951181727468029992,
		),
	),
);
```