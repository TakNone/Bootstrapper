# channels.adminLogResults

**Description** : *Admin log events*

**Layer** : 218

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
			id : -2720380939355374754,
			date : 78,
			user_id : -378724260517002112,
			action : $client->channelAdminLogEventActionChangeTitle(
				prev_value : 'WUDjdw7fgzNnq6sX',
				new_value : 'j1KRqcNYiVZyo53A',
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4179914858074984334,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7136784660127656996,
			title : 'M9Bu4UK1VtJAZQyS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 92,
			version : 77,
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
				until_date : 9,
			),
		),
		$client->chatForbidden(
			id : -152430480382404853,
			title : 'kpe0o9QzywqxBrNS',
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
			id : 1654737868777454896,
			access_hash : -7396802894231536493,
			title : 'jtNr5bXDRP1nAweI',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZoAhGxYOpeB4McU2',
					reason : 'iYhO430CmaMxTLcW',
					text : 'OvTeyJcwmqr0Ll4E',
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
				until_date : 60,
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
				until_date : 63,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 85,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 4242887852087045108,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 7121760257477990412,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 92,
			subscription_until_date : 39,
			bot_verification_icon : 3969361515906965681,
			send_paid_messages_stars : 6869946035075043826,
			linked_monoforum_id : 1758851968460799175,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1749094022871357901,
			access_hash : -4335420475142374562,
			title : 'jh56rv3kMuOwicpa',
			until_date : 30,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6285239365498609756,
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
			id : 3577033307764436347,
			access_hash : -4393696505386048691,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'D6pbsHYUgoW4qjaX',
					reason : 'LcYkul2U7rmf9sZe',
					text : '9QPR8IABxbf2LGys',
				),
			),
			bot_inline_placeholder : 'OV7nN239TsdeSWRD',
			lang_code : 'ViDTNU9x0mY6swcb',
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
				max_id : 62,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 8513483665206822495,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -6897184492086598900,
			),
			bot_active_users : 39,
			bot_verification_icon : -1140720711455695317,
			send_paid_messages_stars : 1878193973330990520,
		),
	),
);
```