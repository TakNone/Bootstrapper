# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 227

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
	posts_between : 93,
	start_delay : 80,
	between_delay : 13,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'ndbt0ajGUyAhkQlC',
			message : '6MKzWrmpkVAcFa7h',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 83,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 68,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 47,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'zHpmlGT0waXROUCS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : -6317081683351506631,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 4,
					document_id : -8896795682520615279,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 55,
					date : 15,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 31,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 8,
					old_text : '5C0VYOEAzr6UdFjs',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 76,
				),
			),
			photo : $client->photoEmpty(
				id : -7643402112103315751,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 6324347595869984152,
			),
			button_text : 'g48x2znb9STrVID1',
			sponsor_info : 'M39ijPGLSDlUc5uJ',
			additional_info : 'mqZCOPbN7DyHEJ8u',
			min_display_duration : 48,
			max_display_duration : 48,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2781606006159979172,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6779481883828050779,
			title : '7384OKIkTUDNZzRL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 2,
			version : 85,
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
				until_date : 21,
			),
		),
		$client->chatForbidden(
			id : 6507517530020540236,
			title : 'ZCoTnxOFGBmyIJ03',
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
			id : -447509413144551179,
			access_hash : -154960744755577452,
			title : 'kSu4zGRsHF1aPO7m',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kAKGZWnDzfwamdHB',
					reason : 'QmYV9Exg2UI5pHN0',
					text : 'vY7CQHRm4AVZqsLD',
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
				until_date : 100,
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
				until_date : 24,
			),
			participants_count : 78,
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
				color : 56,
				background_emoji_id : 4367219315915117470,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 8385824920801333626,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 22,
			subscription_until_date : 15,
			bot_verification_icon : 2343740383220888810,
			send_paid_messages_stars : -3119111589156215092,
			linked_monoforum_id : -930688134814769290,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5274229859595330543,
			access_hash : 2290994362324514129,
			title : 't4rQIhPwG3cavHUo',
			until_date : 7,
		),
	),
	users : array(
		$client->userEmpty(
			id : -676500758834088444,
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
			bot_guard : true,
			id : -2533438987736208109,
			access_hash : 8183714049670318967,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zahVEMDxmTPXG42L',
					reason : 'OsB8F5rZg0INxfDV',
					text : 'ax4L1EmRzjOpYnNc',
				),
			),
			bot_inline_placeholder : 'dXl60ZG1OiN245KW',
			lang_code : 'jzITmvYdlZ29bQoN',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : 2547597816829273294,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : -1796815115660339394,
			),
			bot_active_users : 96,
			bot_verification_icon : -4666430053310936599,
			send_paid_messages_stars : 6090230777544675264,
		),
	),
);
```