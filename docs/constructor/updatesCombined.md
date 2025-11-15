# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 216

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 1,
				peer_id : $client->peerUser(...),
			),
			pts : 9,
			pts_count : 64,
		),
		$client->updateMessageID(
			id : 65,
			random_id : 8007760327984141613,
		),
		$client->updateDeleteMessages(
			messages : array(17),
			pts : 94,
			pts_count : 80,
		),
		$client->updateUserTyping(
			user_id : 9088164428299410116,
			top_msg_id : 80,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 8170835995146055484,
			from_id : $client->peerUser(
				user_id : -4512756951918165907,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 4835273515598639650,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -1048698401900087736,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -5974997184443378019,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 13,
			device : '25SyCMEV9hOLf1IQ',
			location : 'DIKuTcnH1bqtJjyM',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 6046488010451246856,
				chat_id : 66,
				date : 13,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 2,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 21,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 2,
			),
			date : 67,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 7,
			max_date : 7,
			date : 60,
		),
		$client->updateChatParticipantAdd(
			chat_id : -4682352277177852264,
			user_id : -5772127567557036998,
			inviter_id : 6846265079331899625,
			date : 44,
			version : 34,
		),
		$client->updateChatParticipantDelete(
			chat_id : -4735930891070543669,
			user_id : 4630484431488082334,
			version : 14,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 89,
					ip_address : '127.0.0.1',
					port : 62,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 96,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 65,
			type : 'ypbZLSeWVOD0wx5t',
			message : 'PSI9F2xk5djpHhLs',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 34,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 54,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 1,
					language : 'bDQmc7YFHWI9Kvh1',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 23,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : 5441126333464574674,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 38,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 68,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 89,
					document_id : -693842094443046209,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-3225290953272919392),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(7210871780084926359),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(772309235206346457),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5083636926012803208),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5806005699072587716,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 2,
			peer : $client->peerUser(
				user_id : -8961132138768747200,
			),
			top_msg_id : 47,
			max_id : 8,
			still_unread_count : 87,
			pts : 66,
			pts_count : 80,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 6379978849849033705,
			),
			max_id : 29,
			pts : 0,
			pts_count : 85,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 5086472618166059394,
				url : 'https://docs.liveproto.dev',
			),
			pts : 54,
			pts_count : 31,
		),
		$client->updateReadMessagesContents(
			messages : array(78),
			pts : 31,
			pts_count : 9,
			date : 60,
		),
		$client->updateChannelTooLong(
			channel_id : 8255919764335640182,
			pts : 13,
		),
		$client->updateChannel(
			channel_id : 4550884595109561118,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(...),
			),
			pts : 98,
			pts_count : 88,
		),
		$client->updateReadChannelInbox(
			folder_id : 5,
			channel_id : -39789028276989461,
			max_id : 52,
			still_unread_count : 32,
			pts : 6,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 4628856179262170511,
			messages : array(71),
			pts : 70,
			pts_count : 69,
		),
		$client->updateChannelMessageViews(
			channel_id : -7083437656043014681,
			id : 88,
			views : 100,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5011810585898662603,
			user_id : 2396104357779931505,
			is_admin : true,
			version : 15,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-4458476782449916759),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 444399656264306433,
			user_id : -3100826664851459368,
			query : 'rAGKpRfHcVhzOt8o',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'Tb2qLmeBRrytFwD6',
		),
		$client->updateBotInlineSend(
			user_id : -3775419905402101350,
			query : 'loVTbhkE12udNY04',
			geo : $client->geoPointEmpty(),
			id : 'Oo7UKl3NEmxIiQ8P',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 36,
				id : 3892557750179097969,
				access_hash : -2835094998626284014,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
			pts : 62,
			pts_count : 26,
		),
		$client->updateBotCallbackQuery(
			query_id : 6691034105280613309,
			user_id : 804835743782660992,
			peer : $client->peerUser(
				user_id : -6849774171979285879,
			),
			msg_id : 73,
			chat_instance : 7985698800133142380,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'kq5hesjbZnfHaV7Q',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(...),
			),
			pts : 13,
			pts_count : 99,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -8496425363170728626,
			user_id : -2678183215995508815,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 1,
				id : -5415639593865735808,
				access_hash : 817071544387263825,
			),
			chat_instance : 6385813978410714930,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'q5zVur3Lfyxj1wJX',
		),
		$client->updateReadChannelOutbox(
			channel_id : -1152068259900573348,
			max_id : 58,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1468340879455829164,
			),
			top_msg_id : 82,
			saved_peer_id : $client->peerUser(
				user_id : -1182732570004137136,
			),
			draft : $client->draftMessageEmpty(
				date : 62,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -4092069197206852482,
			webpage : $client->webPageEmpty(
				id : 2190222313285637951,
				url : 'https://docs.liveproto.dev',
			),
			pts : 95,
			pts_count : 0,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 10,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 28,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 18,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'ImrEChLGPUc05MSF',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 7092595195024382295,
			data : $client->dataJSON(
				data : 'Mby3swUCkAYvWGQa',
			),
			timeout : 28,
		),
		$client->updateBotShippingQuery(
			query_id : -2882223310562998669,
			user_id : -5711753013153020217,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'lJF3z1I4AhpNQxj7',
				street_line2 : 'ZmYCn9IVvbgk8pay',
				city : 'v7B2bqragVHXjisT',
				state : 'COKDIHLtvpy7fsq5',
				country_iso2 : 'QkwxOEzKS3qy2UD4',
				post_code : 'QkPw4MgYXyepc7S2',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 14224341905564204,
			user_id : -8786686123162581681,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'pTXukYhRiCbyH5nd',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'sYFlzNyZ5GAH90BQ',
			currency : 'Yg6f1F3GiUInuB9D',
			total_amount : -2141103799603038625,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -7358503655513563377,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'aLXtnKP2xlNZyICj',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'qUXk5z1YNO2WKhov',
				from_version : 25,
				version : 55,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 5004818904112175381,
			top_msg_id : 93,
			saved_peer_id : $client->peerUser(
				user_id : 2207683266839825992,
			),
			messages : array(83),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 6873398606094439516,
			available_min_id : 4,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 1221392779550328124,
			),
		),
		$client->updateMessagePoll(
			poll_id : -7329132630009823705,
			poll : $client->poll(
				id : -4924026874328190885,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 17,
				close_date : 61,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 12,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'nkJ1Hlm2v9iwjPWQ',
				solution_entities : array(
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
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -2085428041305489702,
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
				until_date : 61,
			),
			version : 8,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 82,
				),
			),
			pts : 56,
			pts_count : 6,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1976677494289505250,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 71,
				request_chat_title : 'E54pUaITRWbkrOsC',
				request_chat_date : 7,
				business_bot_id : 661069324970288081,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -4141686191952840704,
				registration_month : 'sKFaVMNvunLbXEyG',
				phone_country : '+1234567890',
				name_change_date : 27,
				photo_change_date : 78,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 78,
					distance : 38,
				),
				$client->peerSelfLocated(
					expires : 83,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 69,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 2313680359472511703,
			),
			messages : array(67),
			sent_messages : array(49),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 4726589365972069521,
				access_hash : 1946071484683257798,
				slug : 'NH84eipKgn1X0moB',
				title : 'hN5mVrM4bFsep0i1',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'KrgY0ZP27yBMNqWa',
				installs_count : 40,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 1719970633138259568,
			),
			msg_id : 12,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -611643524826437533,
			peer : $client->peerUser(
				user_id : -4205388479596017371,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 54,
		),
		$client->updateDialogFilter(
			id : 65,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 67,
				title : $client->textWithEntities(...),
				emoticon : '0ghR38fqpVaQOzlk',
				color : 20,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(63),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -8535758383701055852,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 1254652195800404194,
			id : 99,
			forwards : 6,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2750340363815104584,
			top_msg_id : 60,
			read_max_id : 61,
			broadcast_id : -2909901732830513521,
			broadcast_post : 81,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -8615211118641540528,
			top_msg_id : 36,
			read_max_id : 37,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -92256336618660795,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 8318572794862854753,
			top_msg_id : 18,
			from_id : $client->peerUser(
				user_id : 3916600122633311785,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6924720335446235801,
			),
			messages : array(66),
			pts : 34,
			pts_count : 8,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 5949352650060963229,
			messages : array(33),
			pts : 2,
			pts_count : 62,
		),
		$client->updateChat(
			chat_id : 34798261310822014,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 1829095333231462383,
				access_hash : -2695381383673307559,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 51,
					active_date : 41,
					source : 22,
					volume : 7,
					about : 'IgqYF9rwo4OaDbZM',
					raise_hand_rating : 7530762717274839231,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 23,
		),
		$client->updateGroupCall(
			chat_id : 5797044665637776584,
			call : $client->groupCallDiscarded(
				id : -2032029477152973720,
				access_hash : 8577702897690171424,
				duration : 77,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -5837184100221330493,
			),
			ttl_period : 15,
		),
		$client->updateChatParticipant(
			chat_id : -6827253831886452885,
			date : 95,
			actor_id : -7268603757051354901,
			user_id : 117143593797837917,
			prev_participant : $client->chatParticipant(
				user_id : -6490339987847864368,
				inviter_id : -7769767649195727986,
				date : 13,
			),
			new_participant : $client->chatParticipant(
				user_id : 5577440980235744933,
				inviter_id : -3557259561972389915,
				date : 28,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '2SPaLZQCKlrUpne3',
				admin_id : 3917269940450629779,
				date : 52,
				start_date : 89,
				expire_date : 85,
				usage_limit : 86,
				usage : 54,
				requested : 37,
				subscription_expired : 59,
				title : 'kKbNYZcVEaOLp32R',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 55,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 4205171431931738361,
			date : 23,
			actor_id : 5800655858923291253,
			user_id : 6966598758324879385,
			prev_participant : $client->channelParticipant(
				user_id : 2744306648312121135,
				date : 13,
				subscription_until_date : 79,
			),
			new_participant : $client->channelParticipant(
				user_id : -9089027861111058322,
				date : 95,
				subscription_until_date : 0,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'DQ1zU3wksXCpIyYu',
				admin_id : -334571185765750225,
				date : 30,
				start_date : 61,
				expire_date : 44,
				usage_limit : 27,
				usage : 94,
				requested : 29,
				subscription_expired : 17,
				title : '07OQGjWFqntZ3Bux',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 26,
		),
		$client->updateBotStopped(
			user_id : -7553092274929116791,
			date : 40,
			stopped : true,
			qts : 32,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'RjS3DhIxZU8GETdM',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -2721992136501576778,
			),
			bot_id : -8497002362709055894,
			commands : array(
				$client->botCommand(
					command : 'bnuXAIxKfGs6Wotr',
					description : '3FiezRCMp9VYKgZt',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 8362527736691699201,
			),
			requests_pending : 39,
			recent_requesters : array(2816870622762947062),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4481927683736237696,
			),
			date : 52,
			user_id : 2720297945988321162,
			about : 'IOe2w3UpCLZVqs61',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'USEnbQtKAYhViBHm',
				admin_id : 4729591217550299149,
				date : 17,
				start_date : 49,
				expire_date : 27,
				usage_limit : 77,
				usage : 18,
				requested : 85,
				subscription_expired : 41,
				title : 'SQ7U0TYglnJai5HZ',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 49,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -419083498096236317,
			),
			msg_id : 56,
			top_msg_id : 78,
			saved_peer_id : $client->peerUser(
				user_id : 4354151559243040601,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5657718140546707392,
		),
		$client->updateBotMenuButton(
			bot_id : -1044761411189138358,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -3203871047749483346,
			),
			msg_id : 80,
			transcription_id : -8665915157992873799,
			text : 'wf4cvLha6AUKWqIX',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 7969950462461081723,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -919292476229306610,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -3800007874141289689,
			),
			msg_id : 84,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 88,
					h : 40,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 97,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -6573908919461512878,
			topic_id : 61,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 3655666644774437613,
			order : array(100),
		),
		$client->updateUser(
			user_id : -6822042964686270789,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -1301027572838170103,
			),
			story : $client->storyItemDeleted(
				id : 41,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -266548373272619621,
			),
			max_id : 90,
		),
		$client->updateStoryID(
			id : 27,
			random_id : 4651398341415593644,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 6,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -6572308966551758851,
			),
			story_id : 16,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 8634973640583365601,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'odhEstzCvjDXUPrO',
				user_id : 3208215192758651362,
				giveaway_msg_id : 88,
				date : 34,
				expires : 64,
				used_gift_slug : 'jlf8E3zsZyXC12Nk',
				multiplier : 0,
				stars : 8043937867047071866,
			),
			qts : 60,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 8177556325649294199,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1963378914713399922,
			),
			wallpaper : $client->wallPaper(
				id : -4139727316439995630,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 4137784670246346033,
				slug : '3f48e0hNtLMJcyXS',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -5025526441762322389,
			),
			msg_id : 87,
			date : 55,
			actor : $client->peerUser(
				user_id : -8715922706160532658,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'YePfM2E7Lz6ymobv',
				),
				$client->reactionCustomEmoji(
					document_id : 1719802500349665032,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'q7SKmn3jeV9hFk6z',
				),
				$client->reactionCustomEmoji(
					document_id : 927082890819622390,
				),
				$client->reactionPaid(),
			),
			qts : 10,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 5336881813770927632,
			),
			msg_id : 63,
			date : 7,
			reactions : array(
				$client->reactionCount(
					chosen_order : 18,
					reaction : $client->reactionEmpty(...),
					count : 22,
				),
			),
			qts : 47,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 31,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'ctTwOWpDgeKudfS6',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 52,
					shortcut : 'Lpt9CX4uShYfbP5I',
					top_message : 43,
					count : 21,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 37,
				shortcut : 'BnwAOK7LJ5Wi8sSX',
				top_message : 74,
				count : 70,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 5,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 16,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 29,
			messages : array(34),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'NnTtyGdUzP4ZKWgx',
				user_id : -1336917109319861202,
				dc_id : 73,
				date : 42,
				rights : $client->businessBotRights(...),
			),
			qts : 34,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'mnOjIHc9FqNrXiYG',
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			qts : 64,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'Yx3iPZw4Fcf16rha',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 35,
				peer_id : $client->peerUser(...),
			),
			qts : 63,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'efGJMl5xK97iqYTN',
			peer : $client->peerUser(
				user_id : 4629380526108640412,
			),
			messages : array(55),
			qts : 91,
		),
		$client->updateNewStoryReaction(
			story_id : 69,
			peer : $client->peerUser(
				user_id : -5547287228604361454,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3311108951648275856,
				nanos : 20,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 3986176523963165751,
			user_id : -5435207351477428297,
			connection_id : 'WRE6TSAydamFJYhU',
			message : $client->messageEmpty(
				id : 53,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 8402933291090471326,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4916150879985563947,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 10,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 6132164735934106972,
			payload : 'fAw3HYvWaRobuLJD',
			qts : 62,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 3,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -381290331282877335,
				access_hash : 4596233692515035470,
			),
			sub_chain_id : 6,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 72,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 4235209839503273297,
			saved_peer_id : $client->peerUser(
				user_id : 8778393544936352312,
			),
			read_max_id : 35,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 8941829874703563445,
			saved_peer_id : $client->peerUser(
				user_id : 1303314992433836404,
			),
			read_max_id : 77,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8183637333955557822,
			saved_peer_id : $client->peerUser(
				user_id : -2392418097164121168,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 35,
			peer : $client->peerUser(
				user_id : -6902390093410698479,
			),
			topic_id : 99,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -3380008981004096654,
				access_hash : 8513121949919087916,
			),
			from_id : $client->peerUser(
				user_id : 4369275572783343755,
			),
			random_id : -6321685371206626111,
			message : $client->textWithEntities(
				text : '6COywfVK4JbtgEXm',
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
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 8306459791577796184,
			text : 'rhVdgKZaST5Bvtq2',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 2840428230708844582,
			payload : '2auJiQFtMlyepXzA',
			until_date : 13,
			qts : 1,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -1758823498937906973,
				access_hash : -2483896068965241954,
			),
			from_id : $client->peerUser(
				user_id : 4335111423649987108,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -495513497020414724,
			),
			order : array(63),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5092109048652852003,
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
			id : 4614971267439955143,
			access_hash : -1234063848999131702,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'caMQf48PNqyOSKYG',
					reason : 'xgUP3hOIk6W1nNSo',
					text : 'IsVutYowSXJcM8Oz',
				),
			),
			bot_inline_placeholder : 'hqMVv1Qj2zIyYeFu',
			lang_code : 'aXb2R1oqDMtLCI96',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 42,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 6403792994694338189,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 3353968404080937190,
			),
			bot_active_users : 90,
			bot_verification_icon : -5446160416879510993,
			send_paid_messages_stars : -299196172435183453,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1006204621159214224,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5775836998286162142,
			title : 'hbrUuJeRnEZO4yLf',
			photo : $client->chatPhotoEmpty(),
			participants_count : 91,
			date : 8,
			version : 19,
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
				until_date : 36,
			),
		),
		$client->chatForbidden(
			id : -4325898540640935536,
			title : 'wxAKhtFcsTBC80a4',
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
			id : -3242238468940351026,
			access_hash : -6600136477324871944,
			title : 'zmqGals5MkP2ejBJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ROhY2r61Jw4e3Wmq',
					reason : '7n4ltrWuUH96gwSI',
					text : 'cehtN8oZMgSVpPL7',
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
				until_date : 53,
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
				until_date : 37,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 78,
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -1230368138455319856,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -4974289644381961788,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 32,
			subscription_until_date : 35,
			bot_verification_icon : 1871778913912591277,
			send_paid_messages_stars : -386520996380465958,
			linked_monoforum_id : 2440940369207960530,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2718062977970939657,
			access_hash : 6070218697758877377,
			title : 'Q6S5qV8DAINkzCTK',
			until_date : 49,
		),
	),
	date : 89,
	seq_start : 69,
	seq : 24,
);
```