# updates

**Description** : *Full constructor of updates*

**Layer** : 211

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			pts : 24,
			pts_count : 8,
		),
		$client->updateMessageID(
			id : 48,
			random_id : -7861787069694450290,
		),
		$client->updateDeleteMessages(
			messages : array(63),
			pts : 70,
			pts_count : 72,
		),
		$client->updateUserTyping(
			user_id : -7576492342499400429,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -8993562921031007007,
			from_id : $client->peerUser(
				user_id : 4309975266592389146,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 4063292206268036963,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -8068023918577117137,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7816805275013732517,
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
			hash : 2530763955578397142,
			date : 81,
			device : 'N2B1kgVojKeZ7aym',
			location : 'RtdQgUVCwG8ixIW7',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 7947839106648681223,
				chat_id : 60,
				date : 55,
				bytes : '??~k?LiveProto??=??',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 58,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 52,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 22,
			),
			date : 64,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 53,
			max_date : 80,
			date : 89,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5316049829755361248,
			user_id : -4917866422800650222,
			inviter_id : -7667760577886757821,
			date : 39,
			version : 5,
		),
		$client->updateChatParticipantDelete(
			chat_id : -5543824806856489899,
			user_id : 8160528282047932568,
			version : 17,
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
					id : 19,
					ip_address : '127.0.0.1',
					port : 42,
					secret : '?M?^?LiveProto1???',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 27,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 59,
			type : 'csFkwdCqVIPl17gi',
			message : 'eBpUSnthPE2zWLcQ',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 5,
					length : 40,
				),
				$client->messageEntityMention(
					offset : 9,
					length : 97,
				),
				$client->messageEntityHashtag(
					offset : 34,
					length : 89,
				),
				$client->messageEntityBotCommand(
					offset : 41,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 55,
					length : 87,
				),
				$client->messageEntityEmail(
					offset : 63,
					length : 0,
				),
				$client->messageEntityBold(
					offset : 32,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 87,
					length : 42,
				),
				$client->messageEntityCode(
					offset : 74,
					length : 50,
				),
				$client->messageEntityPre(
					offset : 88,
					length : 39,
					language : 'ixvbCmR7Q34c2EzH',
				),
				$client->messageEntityTextUrl(
					offset : 16,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 65,
					length : 31,
					user_id : -5031178651521378797,
				),
				$client->inputMessageEntityMentionName(
					offset : 12,
					length : 28,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 96,
					length : 44,
				),
				$client->messageEntityCashtag(
					offset : 85,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 70,
					length : 7,
				),
				$client->messageEntityStrike(
					offset : 41,
					length : 27,
				),
				$client->messageEntityBankCard(
					offset : 86,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 79,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 21,
					length : 35,
					document_id : 4931812197449206374,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 57,
					length : 72,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7275672206941750594),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-5566952423142195953),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3620521476801002462),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(7181601913625929397),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -1938981520728410758,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 78,
			peer : $client->peerUser(
				user_id : -7411973859621006805,
			),
			max_id : 3,
			still_unread_count : 2,
			pts : 77,
			pts_count : 94,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 1870005993205425965,
			),
			max_id : 99,
			pts : 30,
			pts_count : 13,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -6443810074675244438,
				url : 'https://docs.liveproto.dev',
			),
			pts : 74,
			pts_count : 89,
		),
		$client->updateReadMessagesContents(
			messages : array(71),
			pts : 1,
			pts_count : 15,
			date : 74,
		),
		$client->updateChannelTooLong(
			channel_id : 4973428892557686031,
			pts : 86,
		),
		$client->updateChannel(
			channel_id : 8460811388402736473,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(...),
			),
			pts : 47,
			pts_count : 83,
		),
		$client->updateReadChannelInbox(
			folder_id : 29,
			channel_id : -5002032684936172631,
			max_id : 98,
			still_unread_count : 48,
			pts : 0,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 7716069928353698294,
			messages : array(95),
			pts : 44,
			pts_count : 45,
		),
		$client->updateChannelMessageViews(
			channel_id : -7820353664913203134,
			id : 89,
			views : 52,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -6115768689988437213,
			user_id : 162685943431263320,
			is_admin : true,
			version : 92,
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
			order : array(-6059688741774445862),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -4448768181124278420,
			user_id : 3147825050138045670,
			query : 'FVRK1Hh74nBS23lj',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '21ZhtBUMs0GRiwex',
		),
		$client->updateBotInlineSend(
			user_id : -169492171151155215,
			query : 'oOD6pSIavm8uTsVn',
			geo : $client->geoPointEmpty(),
			id : 'BrD1wz9PMGcsjCXy',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 66,
				id : -3809548639388037181,
				access_hash : -2861046788566937732,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(...),
			),
			pts : 89,
			pts_count : 4,
		),
		$client->updateBotCallbackQuery(
			query_id : -4813528853312727736,
			user_id : 174434486136387049,
			peer : $client->peerUser(
				user_id : -6635372910842806301,
			),
			msg_id : 3,
			chat_instance : -6497178272943934055,
			data : 'E,?#?LiveProto)???',
			game_short_name : 'i0gLkcondIMax2mh',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 33,
				peer_id : $client->peerUser(...),
			),
			pts : 32,
			pts_count : 73,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5331648416204290458,
			user_id : -4202200189058682590,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 25,
				id : 8419671466289106582,
				access_hash : 843681904119090081,
			),
			chat_instance : 2934346987083435657,
			data : '??D??LiveProto???i',
			game_short_name : 'iY2aZPoNukHnG3gK',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2220633740036329766,
			max_id : 7,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 7515988658691992447,
			),
			top_msg_id : 41,
			saved_peer_id : $client->peerUser(
				user_id : -747239190487413609,
			),
			draft : $client->draftMessageEmpty(
				date : 77,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 8742838854727640309,
			webpage : $client->webPageEmpty(
				id : 9148843507054743009,
				url : 'https://docs.liveproto.dev',
			),
			pts : 0,
			pts_count : 74,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 9,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 54,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 38,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'O3b1rJaxRqhTkQ5U',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 3115257357886499870,
			data : $client->dataJSON(
				data : 'HKv4eaI9yir63ZDx',
			),
			timeout : 22,
		),
		$client->updateBotShippingQuery(
			query_id : -1161109505361363467,
			user_id : 8810011984701664225,
			payload : 'd???yLiveProto?D??',
			shipping_address : $client->postAddress(
				street_line1 : '8heQyYIDZ5FSzVLw',
				street_line2 : 'fOcgLxPzbaArspXd',
				city : 'FvZz0tMT3VD29fWG',
				state : 'RkLDjzSFlIMbTJN9',
				country_iso2 : 'WVFwENBu6Y9gsUIn',
				post_code : 'DpLZ6iAw03qW7OHu',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 3511728751011701584,
			user_id : 1662075036535903796,
			payload : '?O2??LiveProto?)??',
			info : $client->paymentRequestedInfo(
				name : '3jJZ16te0fyC4cM2',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'sC7turSiRKTlo6Az',
			currency : 'rTBm9j2q3wdayvPn',
			total_amount : -5329186178318743770,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 7107106812218125051,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '7TIFEPVAceyGaR4Y',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'h2Rgr6miUMjfKcAF',
				from_version : 64,
				version : 49,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 2584280746821290541,
			top_msg_id : 37,
			saved_peer_id : $client->peerUser(
				user_id : -4267774314487786091,
			),
			messages : array(33),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 111929568814387177,
			available_min_id : 68,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -1057799622016390245,
			),
		),
		$client->updateMessagePoll(
			poll_id : 9153571781661157571,
			poll : $client->poll(
				id : 6221959516471929905,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 42,
				close_date : 19,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 37,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : '2irXlW6uxS7h35zR',
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
				user_id : -3051985135100533728,
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
				until_date : 84,
			),
			version : 60,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 61,
				),
			),
			pts : 1,
			pts_count : 26,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -4557792754874825003,
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
				geo_distance : 77,
				request_chat_title : 'tXqD6bcpMKB3LSxf',
				request_chat_date : 42,
				business_bot_id : -3826706202511397882,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7653622169088326849,
				registration_month : '08AIxt4WLTb1pHnu',
				phone_country : '+1234567890',
				name_change_date : 46,
				photo_change_date : 53,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 86,
					distance : 30,
				),
				$client->peerSelfLocated(
					expires : 78,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 10,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -5775574569636867243,
			),
			messages : array(27),
			sent_messages : array(32),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7124222981593950446,
				access_hash : -4221211256222315403,
				slug : 'hCs1SxmztHy8IkYq',
				title : '5gcNJWMv9VI4K8Fi',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'XbnJrqDyRVQ0E4Z1',
				installs_count : 56,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 4008244875193377388,
			),
			msg_id : 65,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8262573576895659608,
			peer : $client->peerUser(
				user_id : 3723972556203628672,
			),
			options : array('??&LiveProto?R?'),
			qts : 47,
		),
		$client->updateDialogFilter(
			id : 83,
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
				id : 98,
				title : $client->textWithEntities(...),
				emoticon : 'hfY6XNsa7VTU1ynd',
				color : 67,
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
			order : array(64),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 4470957414830895735,
			data : '?:???LiveProto??a',
		),
		$client->updateChannelMessageForwards(
			channel_id : 9165177696660804950,
			id : 81,
			forwards : 14,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8318153366191621617,
			top_msg_id : 94,
			read_max_id : 30,
			broadcast_id : 7936969865845951573,
			broadcast_post : 3,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 719566582120979195,
			top_msg_id : 5,
			read_max_id : 89,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4661382036763487688,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 8488408258649359151,
			top_msg_id : 54,
			from_id : $client->peerUser(
				user_id : 6948974612646313320,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1287277327366359870,
			),
			messages : array(57),
			pts : 39,
			pts_count : 99,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -2361719960650016358,
			messages : array(10),
			pts : 93,
			pts_count : 56,
		),
		$client->updateChat(
			chat_id : 3637010673098827129,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 8454227127226309315,
				access_hash : 4221085787910400813,
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
					date : 75,
					active_date : 13,
					source : 90,
					volume : 74,
					about : 'xBHvpsX7o1K0RaUt',
					raise_hand_rating : -9074337257742829120,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 82,
		),
		$client->updateGroupCall(
			chat_id : 1414299532426586956,
			call : $client->groupCallDiscarded(
				id : 9074392426503757119,
				access_hash : 6412962630640269404,
				duration : 86,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1371037758973120008,
			),
			ttl_period : 75,
		),
		$client->updateChatParticipant(
			chat_id : 1982305892818975089,
			date : 46,
			actor_id : -4049757514071542694,
			user_id : 7135379451294981161,
			prev_participant : $client->chatParticipant(
				user_id : -562278169577297034,
				inviter_id : 3517800988202768896,
				date : 72,
			),
			new_participant : $client->chatParticipant(
				user_id : 3905981402282558362,
				inviter_id : 1550928193659329701,
				date : 48,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'cZx9nNwiy4sTrpkS',
				admin_id : 7454163532074268894,
				date : 16,
				start_date : 16,
				expire_date : 84,
				usage_limit : 11,
				usage : 9,
				requested : 37,
				subscription_expired : 43,
				title : 'ueS9sEx0DWPCzdlY',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 99,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -8586606865885202131,
			date : 31,
			actor_id : 5050998351148631581,
			user_id : 7493092684138457056,
			prev_participant : $client->channelParticipant(
				user_id : -8144102621381348857,
				date : 53,
				subscription_until_date : 67,
			),
			new_participant : $client->channelParticipant(
				user_id : -679611791328345155,
				date : 18,
				subscription_until_date : 32,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'AoMOiTmzN10EeXbq',
				admin_id : -392376802358276763,
				date : 1,
				start_date : 2,
				expire_date : 49,
				usage_limit : 37,
				usage : 99,
				requested : 13,
				subscription_expired : 40,
				title : 'aHL2AcRY7fzg4SNn',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 29,
		),
		$client->updateBotStopped(
			user_id : -6807045149117850187,
			date : 31,
			stopped : false,
			qts : 47,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'FWPY3Bl8pGuKc4r0',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 434525109336350780,
			),
			bot_id : -8261192159591652522,
			commands : array(
				$client->botCommand(
					command : 'XTqN7jrUWuti9lIK',
					description : 'ZrEUlwh80Lf9qzSF',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -2343008925977162108,
			),
			requests_pending : 46,
			recent_requesters : array(-826078487888016712),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 5934951446889952166,
			),
			date : 25,
			user_id : -398261895078399779,
			about : 'XhGEoraUR90qdbex',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'u18h2LQiMCYJk6So',
				admin_id : -8511220073030595958,
				date : 43,
				start_date : 100,
				expire_date : 73,
				usage_limit : 19,
				usage : 62,
				requested : 11,
				subscription_expired : 100,
				title : 'C3g9yTPLMKUHjw5E',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 2,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 6636554415924230621,
			),
			msg_id : 39,
			top_msg_id : 98,
			saved_peer_id : $client->peerUser(
				user_id : -7956297581905515783,
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
			query_id : -1569736156930674895,
		),
		$client->updateBotMenuButton(
			bot_id : -67777867102208036,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 1601181077876323572,
			),
			msg_id : 65,
			transcription_id : -9093203199534997225,
			text : 'j2RVmwW56tDIz0fS',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -4091211643150414248,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6073545058322821774,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 1403708834867162022,
			),
			msg_id : 95,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 24,
					h : 21,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 60,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 4872378164080597990,
			topic_id : 41,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -5516151555449049533,
			order : array(34),
		),
		$client->updateUser(
			user_id : -5170985576302622011,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 3166991316289348549,
			),
			story : $client->storyItemDeleted(
				id : 38,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 577707992528780378,
			),
			max_id : 41,
		),
		$client->updateStoryID(
			id : 26,
			random_id : -7682651692695818315,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 22,
				cooldown_until_date : 39,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 7687287844958777257,
			),
			story_id : 55,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 1460349558873290507,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '4QsmZNqpOBG9AzaK',
				user_id : -8234963122344646306,
				giveaway_msg_id : 41,
				date : 32,
				expires : 64,
				used_gift_slug : 'MC4Wr0pU27BZXaf8',
				multiplier : 54,
				stars : -7377275171335550582,
			),
			qts : 80,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -3293047198895639718,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 5713654100000193351,
			),
			wallpaper : $client->wallPaper(
				id : -8111899356042776840,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5982764114541665743,
				slug : 'JGdyF65IHslWBRS0',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 3165202438347655018,
			),
			msg_id : 72,
			date : 49,
			actor : $client->peerUser(
				user_id : 5311028549802821425,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '0Ju5HMzqcroXTkDB',
				),
				$client->reactionCustomEmoji(
					document_id : 816201638604743670,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '4LMk1fonRQqDyvHA',
				),
				$client->reactionCustomEmoji(
					document_id : 7463491080431645185,
				),
				$client->reactionPaid(),
			),
			qts : 8,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -6091654431187152217,
			),
			msg_id : 65,
			date : 82,
			reactions : array(
				$client->reactionCount(
					chosen_order : 36,
					reaction : $client->reactionEmpty(...),
					count : 77,
				),
			),
			qts : 29,
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
					folder_id : 15,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'ucOTEv7d1RIYxiy5',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 48,
					shortcut : 'dJKZMfqxQRs68nkc',
					top_message : 44,
					count : 26,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 43,
				shortcut : 'X2DHFdY4lb3a1rex',
				top_message : 29,
				count : 84,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 74,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 5,
			messages : array(11),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'V7fRrFeJXOCkgvan',
				user_id : 8302415364006295270,
				dc_id : 32,
				date : 3,
				rights : $client->businessBotRights(...),
			),
			qts : 17,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Hg8OQZhYr9wCNUue',
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(...),
			),
			qts : 76,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'pkuoyMl40EiGIQgO',
			message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			qts : 49,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '4znUNXTxgBOfZjqH',
			peer : $client->peerUser(
				user_id : -3945056831724297701,
			),
			messages : array(47),
			qts : 6,
		),
		$client->updateNewStoryReaction(
			story_id : 49,
			peer : $client->peerUser(
				user_id : 2641046582086713460,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -3218693293918853079,
				nanos : 18,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 6163504663404856097,
			user_id : -4738385623430730103,
			connection_id : 'znbSoGgH25jKQRxh',
			message : $client->messageEmpty(
				id : 14,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 73,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 2944827345296763243,
			data : 'c	??LiveProtoe}U ',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 2310832635946524434,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 11,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 4104412624832660074,
			payload : 'KcGCNI5xUjSEQqoJ',
			qts : 46,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 29,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -9148526188324256279,
				access_hash : -3978554083962222881,
			),
			sub_chain_id : 2,
			blocks : array('??#?LiveProto??΀?'),
			next_offset : 35,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 2400245267138206453,
			saved_peer_id : $client->peerUser(
				user_id : -6578644541906757755,
			),
			read_max_id : 43,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -4512031625887236514,
			saved_peer_id : $client->peerUser(
				user_id : -5445460433787359133,
			),
			read_max_id : 80,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -7035350636016185858,
			saved_peer_id : $client->peerUser(
				user_id : 5085555274660017361,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4229241425128992801,
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
			id : 1015540481247913865,
			access_hash : -6755525021012169284,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'udc0VnQ8fqIozFgj',
					reason : 'jSnAH9wz8dloDvZU',
					text : 'NFHBfe1QCJWzsaT9',
				),
			),
			bot_inline_placeholder : '1q67csEOPjir2GNy',
			lang_code : 'weXy179U40spqtmk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 78,
			color : $client->peerColor(
				color : 59,
				background_emoji_id : -5068505667623212641,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -3243340698644813848,
			),
			bot_active_users : 58,
			bot_verification_icon : -1459586263252608828,
			send_paid_messages_stars : -1933271450636299182,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1277230510853044730,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3336073682813555439,
			title : 'gi0Ql8qmbONzxTD4',
			photo : $client->chatPhotoEmpty(),
			participants_count : 67,
			date : 47,
			version : 55,
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : -712668447386092523,
			title : 'iQNWS0Iw23jcMdGb',
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
			id : -4585613836501217885,
			access_hash : -3315235159774667632,
			title : 'BiU6eSswJLRTNPoW',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5wz4HY6bFa0hlxsd',
					reason : 'DnOCQIY5Uxso0i4L',
					text : 'WsE6JwNIbaGk1elH',
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
				until_date : 2,
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
			participants_count : 77,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 30,
			color : $client->peerColor(
				color : 44,
				background_emoji_id : 1031940559981391946,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 5542694235906597480,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 95,
			bot_verification_icon : 2396981579595738318,
			send_paid_messages_stars : 763153642435785552,
			linked_monoforum_id : -192050824201800943,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2801006397469030096,
			access_hash : 6504906794867682242,
			title : 'hD5tdLJVxTeNXGS3',
			until_date : 47,
		),
	),
	date : 10,
	seq : 41,
);
```