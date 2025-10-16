# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links &raquo;*

**Layer** : 216

```tl
chatlists.exportedInvites#10ab6dc7 invites:Vector<ExportedChatlistInvite> chats:Vector<Chat> users:Vector<User> = chatlists.ExportedInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invites</mark> | [`Vector<ExportedChatlistInvite>`](type/ExportedChatlistInvite) | The chat folder deep links » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ExportedInvites](type/chatlists.ExportedInvites)

---

## Example

```php
$chatlistsExportedInvites = $client->chatlists->exportedInvites(
	invites : array(
		$client->exportedChatlistInvite(
			revoked : true,
			title : 'IkWEDGa2yx8Mz7TL',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : 1908606357580812314,
				),
				$client->peerChat(
					chat_id : 7619987990965515613,
				),
				$client->peerChannel(
					channel_id : -3482192861149558317,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7449037369374860191,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2307171489693049181,
			title : 'cxga6BNIVp1HnlkD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 22,
			version : 52,
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
				until_date : 28,
			),
		),
		$client->chatForbidden(
			id : -7566105091453092780,
			title : 'kSLZYH3dEMVvgJ45',
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
			id : 2565176404652478197,
			access_hash : -8178134375166775513,
			title : '1XFUvNP0kL4dtWbf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ljFJAUpQXfRVShi1',
					reason : 'UVAnuDCsm7Yr83lg',
					text : 'r1kFnS2suvqxhUMV',
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
				until_date : 55,
			),
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 33,
			color : $client->peerColor(
				color : 71,
				background_emoji_id : 922711477296013093,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 870942746834774487,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 88,
			subscription_until_date : 39,
			bot_verification_icon : 6016029308330866694,
			send_paid_messages_stars : -3591950092224601312,
			linked_monoforum_id : -3836877142236973831,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7997448009066380946,
			access_hash : -8980413849132918706,
			title : 'cTaNoIWXGPgqwKSf',
			until_date : 86,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2244326609200567686,
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
			id : 7634774844112008374,
			access_hash : 2628763002472146155,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'aUFQxGPkunb8oOfD',
					reason : 'Jj9wM6BR3adqcGpA',
					text : 'gD83PdNL4ysKhjTW',
				),
			),
			bot_inline_placeholder : 'nhbRC6iGKeAv5z7H',
			lang_code : 'ThalReDpr0BPciuI',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : 4742192961954052489,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -4140580638076237279,
			),
			bot_active_users : 96,
			bot_verification_icon : 767305311499958261,
			send_paid_messages_stars : -4127720108150890231,
		),
	),
);
```