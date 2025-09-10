# channels.adminLogResults

**Description** : *Admin log events*

**Layer** : 214

```tl
channels.adminLogResults#ed8af74d events:Vector<ChannelAdminLogEvent> chats:Vector<Chat> users:Vector<User> = channels.AdminLogResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>events</mark> | [`Vector<ChannelAdminLogEvent>`](type/ChannelAdminLogEvent) | Admin log events |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in events |

---

## Type

[channels.AdminLogResults](type/channels.AdminLogResults)

---

## Example

```php
$channelsAdminLogResults = $client->channels->adminLogResults(
	events : array(
		$client->channelAdminLogEvent(
			id : -6332706129734335360,
			date : 47,
			user_id : -7518686974208098127,
			action : $client->channelAdminLogEventActionChangeTitle(
				prev_value : 'fJ7ASWXgMF1DlLik',
				new_value : 'KmWD7ilac9p8HUCr',
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 506642780921974866,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6751079532753359363,
			title : 'gi9wGaDzBbOYkeCW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 92,
			version : 86,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : -6995606421214958778,
			title : 'TxjWnhR73mC0bpVi',
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
			id : -4568632345686432706,
			access_hash : 3832261182297644770,
			title : 'ewqG9ZWLkosExPRr',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8yiGoV7WuECYQANT',
					reason : 'ldDA14VcNumQXvi9',
					text : 'ECAk1ZSO0pVy2mWU',
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
				until_date : 0,
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
				until_date : 15,
			),
			participants_count : 30,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 35,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 563720815268464713,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 4634494034818152865,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 59,
			subscription_until_date : 36,
			bot_verification_icon : -4260843256656881105,
			send_paid_messages_stars : 5752960900185956642,
			linked_monoforum_id : 2333304908654147504,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7045488368256641734,
			access_hash : -9068795307871746678,
			title : 'sgfYizZ6ok14BJRp',
			until_date : 53,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8457194146382621558,
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
			id : -7137215504433378061,
			access_hash : 2737826214545006710,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HU45Dw0mpj7vauyI',
					reason : 'tIUXlLEWZg4zyKiY',
					text : 'LS2zjXYtTo4A7BMC',
				),
			),
			bot_inline_placeholder : 'Krlo7dpXY5J924Vt',
			lang_code : 'w5NqUyp1TYZjfBC6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 3,
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 8775106935770720335,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : 5003334438981032264,
			),
			bot_active_users : 17,
			bot_verification_icon : 4164197660533601637,
			send_paid_messages_stars : -1880083869647313428,
		),
	),
);
```